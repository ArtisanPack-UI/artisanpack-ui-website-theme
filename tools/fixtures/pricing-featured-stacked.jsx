// Design twin of explorations/pricing-tables.html option 6e (Featured + stacked),
// which has no bundle component. Copied from the exploration's source.
const { PricingCard, Button, SectionTitle } = DS;

const STARTER = { name: "Starter", price: "$0", description: "For side projects.", features: ["80 components", "Both themes", "Community support"], cta: "Start free", variant: "hollow" };
const PRO = { name: "Pro", price: "$12", description: "For freelancers.", features: ["All components", "Every pattern", "Figma file", "Priority support"], cta: "Get Pro", variant: "white", featured: true, badge: "Popular" };
const STUDIO = { name: "Studio", price: "$39", description: "For teams.", features: ["Everything in Pro", "Unlimited seats", "Theming API"], cta: "Contact sales", variant: "hollow" };

const Card = (p, extra = {}) => (
    <PricingCard name={p.name} price={p.price} description={p.description} features={p.features} featured={p.featured} badge={p.badge}
        cta={<Button variant={p.variant || "hollow"} fullWidth>{p.cta}</Button>} {...extra} />
);
const Wrap = ({ children }) => (
    <section style={{ padding: "96px 0", background: "var(--color-section)" }}>
        <div style={{ maxWidth: 1200, margin: "0 auto", padding: "0 24px" }}>{children}</div>
    </section>
);
const Head = ({ title, lead = "Start free. Upgrade when you ship. Cancel anytime." }) => (
    <SectionTitle align="center" eyebrow="Pricing" title={title} lead={lead} />
);

const Variant = () => (<Wrap><Head title="Lead with the plan you want sold" /><div style={{ marginTop: 56, display: "grid", gridTemplateColumns: "1.15fr 0.85fr", gap: 22, alignItems: "stretch" }}>
    {Card(PRO, { style: { transform: "none", height: "100%" } })}
    <div style={{ display: "flex", flexDirection: "column", gap: 22 }}>{Card(STARTER)}{Card(STUDIO)}</div>
</div></Wrap>);

ReactDOM.createRoot(document.getElementById('root')).render(<Variant />);
