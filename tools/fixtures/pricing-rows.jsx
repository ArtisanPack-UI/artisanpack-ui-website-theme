// Design twin of explorations/pricing-tables.html option 6h (Horizontal rows),
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

function Variant() {
    const plans = [STARTER, PRO, STUDIO];
    return (
        <Wrap>
            <Head title="Plans as rows" lead="A compact, stacked layout for many tiers." />
            <div style={{ marginTop: 56, display: "flex", flexDirection: "column", gap: 16 }}>
                {plans.map((p, i) => (
                    <div key={i} style={{ display: "grid", gridTemplateColumns: "1fr 1.4fr auto", gap: 32, alignItems: "center", padding: "26px 30px", borderRadius: "var(--box-radius)", border: p.featured ? "var(--box-border-width) solid transparent" : "1px solid var(--color-border-subtle)", background: p.featured ? "linear-gradient(var(--color-surface), var(--color-surface)) padding-box, var(--grad-neon) border-box" : "var(--color-surface)", boxShadow: p.featured ? "var(--glow-gradient)" : "none" }}>
                        <div>
                            <div style={{ display: "flex", alignItems: "baseline", gap: 8 }}>
                                <span style={{ fontFamily: "var(--font-display)", fontSize: 20, fontWeight: 700 }}>{p.name}</span>
                                {p.badge ? <span style={{ fontFamily: "var(--font-ui)", fontSize: 11, fontWeight: 700, letterSpacing: ".08em", textTransform: "uppercase", color: "var(--color-primary)" }}>{p.badge}</span> : null}
                            </div>
                            <div style={{ fontSize: 13.5, color: "var(--color-text-muted)", marginTop: 4 }}>{p.description}</div>
                            <div style={{ marginTop: 8 }}><span style={{ fontFamily: "var(--font-display)", fontSize: 30, fontWeight: 800, letterSpacing: "-.02em" }}>{p.price}</span><span style={{ fontSize: 14, color: "var(--color-text-muted)" }}>/mo</span></div>
                        </div>
                        <div style={{ display: "flex", flexWrap: "wrap", gap: "8px 20px" }}>
                            {p.features.map((f, fi) => <span key={fi} style={{ display: "inline-flex", alignItems: "center", gap: 8, fontSize: 14, color: "var(--color-text-muted)" }}><i className="fa-solid fa-check" style={{ color: "var(--color-secondary)" }} />{f}</span>)}
                        </div>
                        <div><Button variant={p.variant === "white" ? "gradient" : "hollow"}>{p.cta}</Button></div>
                    </div>
                ))}
            </div>
        </Wrap>
    );
}

ReactDOM.createRoot(document.getElementById('root')).render(<Variant />);
