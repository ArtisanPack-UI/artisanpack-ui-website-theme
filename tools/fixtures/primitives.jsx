// Design twin of primitives.html: the shared building blocks (SectionTitle,
// Button, boxed Feature) inside the 1200px section shell.
const { SectionTitle, Button, Feature } = DS;

const shell = (background) => ({ background, padding: '120px 24px' });
const inner = { maxWidth: 1200, margin: '0 auto', display: 'flex', flexDirection: 'column', gap: 56 };

// The design templates collapse grids at about 1080px and 860px; mirror the
// editor's Tablet (≤1023px) and Mobile (≤767px) breakpoints the theme uses.
const gridCss = `
.fixture-grid { display: grid; grid-template-columns: repeat(3, minmax(0, 1fr)); gap: 22px; }
@media (max-width: 1023px) { .fixture-grid { grid-template-columns: repeat(2, minmax(0, 1fr)); } }
@media (max-width: 767px) { .fixture-grid { grid-template-columns: minmax(0, 1fr); } }
`;

const items = [
    ['primary', 'fa-rocket', 'gradient', 'Ship faster', 'Pre-built Livewire blocks, ready to drop in.'],
    ['secondary', 'fa-palette', 'secondary', 'Theme in one line', 'Swap data-theme for dark or light — no rebuild.'],
    ['accent', 'fa-universal-access', 'accent', 'Accessible', 'WCAG-minded defaults baked into every block.'],
    ['primary', 'fa-bolt', 'primary', 'Zero runtime', 'Pure CSS tokens and lightweight React.'],
    ['secondary', 'fa-cube', 'secondary', '200+ components', 'Every primitive you need, fully themeable.'],
    ['accent', 'fa-code', 'accent', 'Copy-paste friendly', 'Readable markup you actually own.'],
];

function Primitives() {
    return (
        <>
            <style>{gridCss}</style>
            <section style={shell('var(--color-base)')}>
                <div style={inner}>
                    <SectionTitle eyebrow="At a glance" title="A bento of what's inside" lead="Mixed tile sizes, with an image in the mix." />
                    <div style={{ display: 'flex', gap: 14, flexWrap: 'wrap' }}>
                        <Button size="lg" iconRight={<i className="fa-solid fa-arrow-right" />}>Get started</Button>
                        <Button size="lg" variant="hollow" iconLeft={<i className="fa-brands fa-github" />}>View on GitHub</Button>
                    </div>
                </div>
            </section>
            <section style={shell('var(--color-section)')}>
                <div style={inner}>
                    <SectionTitle align="center" eyebrow="At a glance" title="A bento of what's inside" lead="Mixed tile sizes, with an image in the mix." />
                    <div className="fixture-grid">
                        {items.map(([border, icon, iconStyle, title, body]) => (
                            <Feature key={title} boxed border={border} iconStyle={iconStyle} icon={<i className={`fa-solid ${icon}`} />} title={title}>{body}</Feature>
                        ))}
                    </div>
                </div>
            </section>
        </>
    );
}

ReactDOM.createRoot(document.getElementById('root')).render(<Primitives />);
