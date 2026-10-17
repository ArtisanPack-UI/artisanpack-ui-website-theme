// Design twin of explorations/testimonials-sections.html option 3b (3-up grid).
// The bundle's Testimonials defaults to three short quotes; the exploration
// passes the long copy, so this copies its source as drawn.
const { TestimonialCard, Avatar, SectionTitle } = DS;

const R = [
    { review: "We shipped a polished marketing site in a single weekend — the blocks just snapped together.", name: "Dana Reyes", role: "Founder, Maker Studio", border: "primary" },
    { review: "The token system is the cleanest I've used. Theming was genuinely one line.", name: "Marcus Bell", role: "Lead Engineer, Northwind", border: "secondary" },
    { review: "Every block looks handcrafted. Our site finally feels like us.", name: "Priya Anand", role: "Growth, Loop", border: "accent" },
    { review: "Dark mode out of the box saved us a week of design work. The neon glows are chef's kiss.", name: "Theo Ksior", role: "Design Lead, Vela", border: "primary" },
];
const TC = (t, i) => (
    <TestimonialCard key={i} border={t.border} rating={5} review={t.review} name={t.name} role={t.role} avatar={<Avatar name={t.name} size={44} />} />
);

const Variant = () => (
    <section style={{ padding: "96px 0", background: "var(--color-base)" }}>
        <div style={{ maxWidth: 1200, margin: "0 auto", padding: "0 24px" }}>
            <SectionTitle align="center" eyebrow="Loved by makers" title="What builders are saying" />
            <div style={{ marginTop: 56, display: "grid", gridTemplateColumns: "repeat(3, 1fr)", gap: 22 }}>{R.slice(0, 3).map(TC)}</div>
        </div>
    </section>
);

ReactDOM.createRoot(document.getElementById('root')).render(<Variant />);
