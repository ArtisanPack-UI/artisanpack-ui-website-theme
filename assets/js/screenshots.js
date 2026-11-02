/*
 * Behaviour for the Screenshots patterns. Both enhance plain blocks, so the
 * editor canvas (which runs no theme JS) shows them as a static grid and as
 * ordinary tabs.
 *
 * - Lightbox style on a Grid: each image becomes a button that opens a modal
 *   dialog. The native <dialog> traps focus, closes on Escape and hands focus
 *   back to the button; the arrow keys step through the set. An image with
 *   its own link keeps it and stays out of the set.
 * - Carousel style on Tabs: previous and next buttons that step the tabs.
 *   The tabs themselves stay the dots. `is-ready` turns on the Carousel's
 *   layout, so without this script it stays ordinary tabs.
 */
(() => {
    const iconButton = (icon, label, className) => {
        const button = document.createElement('button');
        button.type = 'button';
        button.className = className;
        button.setAttribute('aria-label', label);
        button.innerHTML = `<i class="fa-solid fa-${icon}" aria-hidden="true"></i>`;
        return button;
    };

    const buildDialog = () => {
        const dialog = document.createElement('dialog');
        dialog.className = 'ap-lightbox';
        dialog.innerHTML = `
            <div class="ap-lightbox__panel">
                <img class="ap-lightbox__image" alt="">
                <div class="ap-lightbox__bar">
                    <p class="ap-lightbox__caption" aria-live="polite"><span></span> <span class="ap-lightbox__count"></span></p>
                    <div class="ap-lightbox__controls"></div>
                </div>
            </div>`;
        document.body.append(dialog);
        return dialog;
    };

    const bindLightbox = (grid) => {
        const figures = [...grid.querySelectorAll('figure.wp-block-image')].filter((figure) => figure.querySelector('img') && !figure.querySelector('a'));

        if (figures.length === 0) {
            return;
        }

        const shots = figures.map((figure) => {
            const image = figure.querySelector('img');
            return {
                image,
                caption: figure.closest('.wp-block-artisanpack-grid-item')?.querySelector('p')?.textContent.trim() ?? '',
            };
        });
        let dialog = null;
        let current = 0;

        const show = (index) => {
            current = (index + shots.length) % shots.length;
            const shot = shots[current];
            const large = dialog.querySelector('.ap-lightbox__image');
            large.src = shot.image.currentSrc || shot.image.src;
            large.alt = shot.image.alt;
            dialog.setAttribute('aria-label', shot.caption || shot.image.alt || 'Screenshot');
            dialog.querySelector('.ap-lightbox__caption span').textContent = shot.caption;
            dialog.querySelector('.ap-lightbox__count').textContent = `${current + 1} / ${shots.length}`;
        };

        const ensureDialog = () => {
            if (dialog) {
                return;
            }

            dialog = buildDialog();
            const controls = dialog.querySelector('.ap-lightbox__controls');
            const previous = iconButton('arrow-left', 'Previous', 'ap-round-button');
            const next = iconButton('arrow-right', 'Next', 'ap-round-button');
            const close = iconButton('xmark', 'Close', 'ap-round-button');
            close.autofocus = true;
            controls.append(previous, next, close);

            previous.addEventListener('click', () => show(current - 1));
            next.addEventListener('click', () => show(current + 1));
            close.addEventListener('click', () => dialog.close());

            dialog.addEventListener('click', (event) => {
                if (event.target === dialog) {
                    dialog.close();
                }
            });
            dialog.addEventListener('keydown', (event) => {
                if (event.key === 'ArrowRight') {
                    show(current + 1);
                } else if (event.key === 'ArrowLeft') {
                    show(current - 1);
                }
            });
            dialog.addEventListener('close', () => document.documentElement.classList.remove('ap-lightbox-open'));
        };

        shots.forEach((shot, index) => {
            const trigger = document.createElement('button');
            trigger.type = 'button';
            trigger.className = 'ap-lightbox-trigger';
            trigger.setAttribute('aria-label', `Enlarge ${shot.caption || shot.image.alt || 'screenshot'}`);
            shot.image.replaceWith(trigger);
            trigger.append(shot.image);
            trigger.addEventListener('click', () => {
                ensureDialog();
                show(index);
                document.documentElement.classList.add('ap-lightbox-open');
                dialog.showModal();
            });
        });
    };

    const bindCarousel = (tabs) => {
        const list = tabs.querySelector('.ap-tabs__list');
        const triggers = [...tabs.querySelectorAll('[role="tab"]')];

        if (!list || triggers.length < 2) {
            return;
        }

        const status = document.createElement('span');
        status.className = 'screen-reader-text';
        status.setAttribute('aria-live', 'polite');

        const step = (button, direction) => {
            const selected = triggers.findIndex((trigger) => trigger.getAttribute('aria-selected') === 'true');
            const target = triggers[(selected + direction + triggers.length) % triggers.length];
            target.click();
            // The tabs runtime moves focus to the tab it opens.
            button.focus({ preventScroll: true });
            status.textContent = target.textContent.trim();
        };

        const previous = iconButton('arrow-left', 'Previous screenshot', 'ap-round-button');
        const next = iconButton('arrow-right', 'Next screenshot', 'ap-round-button');
        previous.addEventListener('click', () => step(previous, -1));
        next.addEventListener('click', () => step(next, 1));
        list.prepend(previous, next);
        list.append(status);
        tabs.classList.add('is-ready');
    };

    const bound = new WeakSet();
    const once = (bind) => (element) => {
        if (!bound.has(element)) {
            bound.add(element);
            bind(element);
        }
    };

    const init = () => {
        document.querySelectorAll('.wp-block-artisanpack-grid.is-style-lightbox').forEach(once(bindLightbox));
        document.querySelectorAll('.ap-tabs.is-style-carousel').forEach(once(bindCarousel));
    };

    window.addEventListener('ap:rebind', init);

    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', init);
    } else {
        init();
    }
})();
