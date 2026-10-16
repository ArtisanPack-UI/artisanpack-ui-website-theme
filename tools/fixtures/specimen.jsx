// Design twin of specimen.html, built from the design bundle's own primitives
// and tokens. Run: node tools/shoot.mjs specimen --theme=<render URL> --design=tools/fixtures/specimen.jsx
const { SectionTitle, Button, Feature } = DS;

const mono = { fontFamily: 'var(--font-mono)', fontSize: 12, margin: 0 };
const grid = (cols) => ({ display: 'grid', gridTemplateColumns: `repeat(${cols}, 1fr)`, gap: 22 });
const box = (border, glow, extra = {}) => ({
    background: 'var(--color-surface)',
    border: '3px solid ' + border,
    borderRadius: 12,
    padding: 32,
    minHeight: 140,
    boxShadow: glow,
    boxSizing: 'border-box',
    ...extra,
});
const swatch = (background) => ({ background, borderRadius: 12, minHeight: 120, padding: 16, boxSizing: 'border-box' });
const starfield = `radial-gradient(1.5px 1.5px at 20% 30%, rgba(255,255,255,0.55), transparent 60%),
    radial-gradient(1.5px 1.5px at 75% 15%, rgba(255,255,255,0.40), transparent 60%),
    radial-gradient(1px 1px at 40% 70%, rgba(255,255,255,0.45), transparent 60%),
    radial-gradient(1px 1px at 88% 55%, rgba(0,229,255,0.55), transparent 60%),
    radial-gradient(1.5px 1.5px at 60% 85%, rgba(255,255,255,0.35), transparent 60%),
    radial-gradient(1px 1px at 10% 80%, rgba(224,64,251,0.50), transparent 60%),
    radial-gradient(1px 1px at 50% 45%, rgba(255,255,255,0.30), transparent 60%), var(--ap-ink)`;

function Specimen() {
    return (
        <section style={{ background: 'var(--color-base)', padding: '96px 24px' }}>
            <div style={{ maxWidth: 1200, margin: '0 auto', display: 'flex', flexDirection: 'column', gap: 96 }}>
                <SectionTitle eyebrow="At a glance" title="A bento of what's inside" lead="Mixed tile sizes, with an image in the mix." />
                <SectionTitle align="center" eyebrow="At a glance" title="A bento of what's inside" lead="Mixed tile sizes, with an image in the mix." />

                <div style={{ display: 'flex', flexDirection: 'column', gap: 16 }}>
                    <h1 className="ap-h1" style={{ margin: 0 }}>Heading one — 56/700</h1>
                    <h2 className="ap-h2" style={{ margin: 0 }}>Heading two — 44/700</h2>
                    <h3 className="ap-h3" style={{ margin: 0 }}>Heading three — 36/600</h3>
                    <h4 className="ap-h4" style={{ margin: 0 }}>Heading four — 28/600</h4>
                    <h5 className="ap-h5" style={{ margin: 0 }}>Heading five — 22/600</h5>
                    <h6 className="ap-h6" style={{ margin: 0 }}>Heading six — 18/500</h6>
                    <p className="ap-body" style={{ margin: 0 }}>
                        Body copy at 16/1.65. Pre-built blocks, ready to drop in — with <a href="#" style={{ color: 'var(--color-text-link)' }}>a link in the flow</a> and <code>composer require artisanpack-ui/livewire-ui-components</code> inline.
                    </p>
                    <p style={{ ...mono, color: 'var(--color-secondary)' }}>SPACE MONO · v2.4.0 · 12px</p>
                </div>

                <div style={{ display: 'flex', gap: 14, flexWrap: 'wrap', alignItems: 'center' }}>
                    <Button size="lg">Get started →</Button>
                    <Button size="lg" variant="hollow">View on GitHub</Button>
                    <Button>Medium</Button>
                    <Button variant="hollow">Hollow medium</Button>
                </div>

                <div style={grid(3)}>
                    <Feature boxed border="primary" iconStyle="gradient" icon={<i className="fa-solid fa-rocket" />} title="Ship faster">Pre-built Livewire blocks, ready to drop in.</Feature>
                    <Feature boxed border="secondary" iconStyle="secondary" icon={<i className="fa-solid fa-palette" />} title="Theme in one line">Swap data-theme for dark or light — no rebuild.</Feature>
                    <Feature boxed border="accent" iconStyle="accent" icon={<i className="fa-solid fa-universal-access" />} title="Accessible">WCAG-minded defaults baked into every block.</Feature>
                </div>

                <div style={grid(4)}>
                    <div style={box('var(--color-primary)', 'var(--glow-primary)')}><p style={mono}>GLOW-PRIMARY</p></div>
                    <div style={box('var(--color-secondary)', 'var(--glow-secondary)')}><p style={mono}>GLOW-SECONDARY</p></div>
                    <div style={box('var(--color-accent)', 'var(--glow-accent)')}><p style={mono}>GLOW-ACCENT</p></div>
                    <div style={box('transparent', 'var(--glow-gradient)', { background: 'linear-gradient(var(--color-surface), var(--color-surface)) padding-box, var(--grad-neon) border-box' })}><p style={mono}>GRADIENT BORDER + GLOW</p></div>
                </div>

                <div style={grid(4)}>
                    <div style={swatch('var(--ap-gradient)')}><p style={mono}>BRAND</p></div>
                    <div style={swatch('var(--grad-neon)')}><p style={mono}>NEON</p></div>
                    <div style={swatch(starfield)}><p style={mono}>STARFIELD</p></div>
                    <div style={swatch('linear-gradient(135deg, color-mix(in srgb, var(--color-primary) 55%, transparent), color-mix(in srgb, var(--color-accent) 55%, transparent)), var(--color-surface-2)')}><p style={mono}>MEDIA PLACEHOLDER</p></div>
                </div>
            </div>
        </section>
    );
}

ReactDOM.createRoot(document.getElementById('root')).render(<Specimen />);
