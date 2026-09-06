(() => {
    const RESET_MS = 1400;
    const setLabel = (btn, text) => {
        const label = btn.querySelector('span');
        if (label) {
            label.textContent = text;
        }
    };

    document.addEventListener('click', (event) => {
        const btn = event.target.closest('[data-clipboard-target]');
        if (!btn) {
            return;
        }
        const chip = btn.closest('[data-clipboard]');
        if (!chip) {
            return;
        }
        const explicit = btn.getAttribute('data-clipboard-value');
        const value = (explicit && explicit.length > 0)
            ? explicit
            : (chip.querySelector('.ap-clipboard__value')?.textContent?.trim() ?? '');
        if (!value) {
            return;
        }
        const copiedLabel = chip.getAttribute('data-copied-label') ?? 'Copied';
        const commit = () => {
            chip.classList.add('is-copied');
            const original = btn.querySelector('span')?.textContent ?? 'Copy';
            setLabel(btn, copiedLabel);
            setTimeout(() => {
                chip.classList.remove('is-copied');
                setLabel(btn, original);
            }, RESET_MS);
        };
        if (navigator.clipboard?.writeText) {
            navigator.clipboard.writeText(value).then(commit, () => {});
            return;
        }
        const ta = document.createElement('textarea');
        ta.value = value;
        ta.setAttribute('readonly', '');
        ta.style.position = 'absolute';
        ta.style.left = '-9999px';
        document.body.appendChild(ta);
        ta.select();
        try {
            document.execCommand('copy');
            commit();
        } catch (_) {
            /* noop */
        }
        document.body.removeChild(ta);
    });
})();
