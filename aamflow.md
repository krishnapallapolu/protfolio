# AamFlow — Context & Reference Document

&gt; **Version:** 1.0  
&gt; **Last Updated:** 2025-02-09  
&gt; **Author:** Solo Founder  
&gt; **Status:** Pre-launch / MVP Development  
&gt; **License:** Private & Confidential

---

## 1. Executive Summary

**AamFlow** is a payment reconciliation API and dashboard for UAE SMEs, built to capitalize on the Central Bank of the UAE's **Aam** instant payment platform. It automates the gap between real-time payments and legacy accounting systems.

**Core Thesis:** UAE's instant payment infrastructure (Aam) is live and growing (64.1M transactions, AED 164.7B in 2023), but SMEs lack automated reconciliation tools. Existing solutions are either service-heavy (human accountants) or foreign (don't understand UAE VAT/Jaywan/Aam).

**Differentiation:** Zero-employee, API-first, compliance-native infrastructure. Not an accounting firm. Not a bank. The Plaid + Stripe Treasury for UAE instant payments.

---

## 2. Founder Context

| Attribute | Value |
|-----------|-------|
| **Role** | Solo founder, full-stack engineer |
| **Location** | Dubai, UAE (via Abu Dhabi Freelance License) |
| **Stack** | MERN (MongoDB, Express, React, Node.js) + LAMP/Laravel |
| **Constraint** | Zero employees, zero contractors, zero service revenue |
| **Target Markets** | UAE (primary), Saudi/GCC (secondary), developed nations (tertiary) |
| **Business Model** | Pure SaaS, self-serve, API-first |

**Why This Stack:**
- **Laravel (Backend):** Audit trails, complex VAT rules, transaction integrity, regulatory compliance
- **MERN (Frontend + API):** Real-time dashboards, AI matching algorithms, developer experience
- **MongoDB:** Schema flexibility for evolving UAE payment formats (Aam, Jaywan, CBDC, etc.)

---

## 3. Market Context

### 3.1 Regulatory Environment

| Regulation | Impact | Status |
|------------|--------|--------|
| **Aam (Instant Payment Platform)** | Real-time AED transfers, 24/7, AED 50k limit | Live since 2023, 64.1M transactions [^17^] |
| **Open Finance Regulation** | Mandates bank APIs for licensed fintechs | Effective April 2024 [^19^] |
| **Digital Dirham (CBDC)** | Programmable money, smart contract settlements | Pilot 2025, full launch late 2025 [^19^] |
| **E-invoicing (FTA)** | Machine-readable VAT invoices, real-time reporting | Mandate expected 2025-2026 [^18^] |
| **Jaywan Domestic Card Scheme** | UAE-owned alternative to Visa/Mastercard | Launching 2025 [^17^] |
| **Corporate Tax (9%)** | Applies above AED 375,000 profit | Effective 2023 [^4^] |
| **VAT (5%)** | Standard rate, complex partial exemption rules | Since 2018 |

### 3.2 Competitive Landscape

| Competitor | Type | Weakness | My Advantage |
|------------|------|----------|--------------|
| **Oncount** | AI Accounting + Human Accountants | Service-heavy, raised $1.5M [^11^] | Pure software, no humans, cheaper |
| **Hisabkitab** | Traditional SME Accounting | Manual processes, no Aam integration [^10^] | Native instant payment support |
| **QuickBooks UAE** | Global Player | Generic, no Jaywan/Aam support | Compliance-native, local integrations |
| **Tally** | Legacy ERP | On-premise, outdated UX | Cloud-native, API-first |
| **Wafeer** | VAT Compliance App | Narrow focus, no reconciliation | End-to-end payment-to-ledger |
| **UAE Banks (FAB, ENBD)** | Direct APIs | Poor developer experience, no multi-bank aggregation | Unified API layer |

### 3.3 Target Customer Segments

**Primary: UAE SMEs (5-50 employees)**
- **Real Estate Agents:** High-volume rental deposits, escrow management
- **Trading Companies:** Multi-currency imports/exports, VAT on reverse charge
- **E-commerce:** Instant payment acceptance, automated order reconciliation
- **Professional Services:** Invoice-to-cash automation, project-based billing

**Secondary: Fintech Infrastructure**
- Other fintechs needing UAE compliance layer
- ERP systems (Odoo, Zoho) needing UAE bank connectors
- Cross-border payment platforms (Wise, Revolut UAE)

---

## 4. Product Specification

### 4.1 Core Value Proposition

&gt; "Reconcile Aam instant payments with your accounting in 30 seconds, not 3 days. Zero manual entry. Zero accountants. Zero errors."

### 4.2 Feature Set (MVP → Scale)

#### Phase 1: MVP (Months 1-3)
| Feature | Tech Stack | User Value |
|---------|-----------|------------|
| **Aam Sandbox Integration** | Laravel API client | Test instant payments |
| **Emirates NBD Open Banking** | OAuth2 + REST | Live bank feeds |
| **Auto-Reconciliation Engine** | Python + MongoDB | Match payments to invoices 90%+ accuracy |
| **Basic VAT Calculation** | Laravel rules engine | Real-time tax liability tracking |
| **React Dashboard** | React + Tailwind | Transaction view, reconciliation status |
| **Multi-currency Ledger** | MongoDB schema | AED, USD, EUR support |

#### Phase 2: Growth (Months 4-6)
| Feature | Tech Stack | User Value |
|---------|-----------|------------|
| **Additional Banks** (FAB, ADCB, Mashreq) | Open Banking APIs | Universal UAE coverage |
| **Jaywan Card Support** | Laravel payment gateway module | Domestic card reconciliation |
| **AI Matching Improvements** | TensorFlow.js + Node | 95%+ auto-match rate |
| **FTA Report Generation** | Laravel PDF/Excel export | Compliance-ready filings |
| **Developer API** | Node.js + GraphQL | White-label integrations |

#### Phase 3: Platform (Months 7-12)
| Feature | Tech Stack | User Value |
|---------|-----------|------------|
| **Digital Dirham (CBDC) Support** | Smart contract integration (Solidity) | Future-proofing |
| **Saudi AFAQ Integration** | Cross-border instant payments | GCC expansion |
| **E-invoicing (FTA)** | Real-time API submission | Full compliance automation |
| **AI Anomaly Detection** | Python ML | Fraud detection, unusual patterns |
| **Mobile App** | React Native | On-the-go reconciliation |

### 4.3 Technical Architecture
┌─────────────────────────────────────────────────────────────┐
│                        CLIENT LAYER                          │
│  React Dashboard  │  React Native App  │  Developer API      │
└────────────────────┬────────────────────────────────────────┘
│
┌────────────────────▼────────────────────────────────────────┐
│                      API GATEWAY (Node.js/Express)           │
│  Auth (JWT)  │  Rate Limiting  │  Request Validation         │
└────────────────────┬────────────────────────────────────────┘
│
┌────────────┼────────────┐
│            │            │
┌───────▼────┐ ┌────▼────┐ ┌─────▼──────┐
│  LARAVEL   │ │ PYTHON  │ │  NODE.JS   │
│  CORE API  │ │ AI SVC  │ │  WEBSOCKET │
│            │ │         │ │  (Real-time)│
│ • VAT Eng  │ │ • Match │ │ • Live Tx  │
│ • Audit    │ │ • Pred  │ │ • Alerts   │
│ • Reports  │ │ • Anom  │ │            │
└───────┬────┘ └────┬────┘ └─────┬──────┘
│           │            │
└───────────┼────────────┘
│
┌───────────────────▼─────────────────────────────────────────┐
│                    DATA LAYER                                │
│  MongoDB (Transactions)  │  PostgreSQL (Accounting)          │
│  Redis (Cache/Queue)     │  S3 (Documents/Exports)           │
└─────────────────────────────────────────────────────────────┘
│
┌────────────────────▼────────────────────────────────────────┐
│                 INTEGRATION LAYER                            │
│  Aam API  │  Open Banking  │  FTA API  │  Jaywan  │ CBDC   │
└─────────────────────────────────────────────────────────────┘
Copy

### 4.4 Database Schema (Simplified)

**MongoDB Collections:**
```javascript
// transactions
{
  _id: ObjectId,
  aam_transaction_id: String, // Unique from Aam
  bank_account_id: ObjectId,
  amount: Decimal128,
  currency: String, // AED, USD, EUR
  type: String, // CREDIT, DEBIT
  status: String, // PENDING, RECONCILED, DISPUTED
  raw_data: Object, // Original bank format
  reconciliation: {
    status: String,
    confidence: Number, // AI confidence score
    matched_invoice_id: ObjectId,
    matched_at: Date,
    method: String // AI_RULE, EXACT_MATCH, MANUAL
  },
  vat: {
    applicable: Boolean,
    rate: Number, // 0, 5
    amount: Decimal128,
    treatment: String // STANDARD, REVERSE_CHARGE, EXEMPT
  },
  created_at: Date,
  updated_at: Date
}

// invoices (synced from accounting or created in AamFlow)
{
  _id: ObjectId,
  user_id: ObjectId,
  invoice_number: String,
  amount: Decimal128,
  currency: String,
  status: String, // DRAFT, SENT, PAID, OVERDUE
  line_items: Array,
  vat_summary: Object,
  reconciliation_status: String,
  paid_at: Date,
  paid_via_transaction_id: ObjectId
}

// bank_accounts
{
  _id: ObjectId,
  user_id: ObjectId,
  bank_code: String, // ENBD, FAB, etc.
  account_number: String, // Masked
  iban: String,
  connection: {
    provider: String, // OPEN_BANKING, SCREEN_SCRAPING
    status: String, // ACTIVE, EXPIRED, ERROR
    last_sync: Date,
    access_token: Encrypted
  },
  supported_features: Array // [AAM, JAYWAN, INSTANT]
}
5. Business Operations
5.1 Legal Structure
Table
Copy
Aspect	Detail
License Type	Abu Dhabi Freelance License (Tamm platform)
Activities	AI Development, Software Designing, Data Classification
Cost	~AED 1,200-5,175/year
Visa	Self-sponsored residency (2 years)
Banking	Wio Business or Liv. (digital-first)
Tax	Personal income (0%), Corporate tax (9% above AED 375k profit)
Why Not LLC? Freelance license prohibits hiring employees —enforces my constraint. Convert to RAKEZ LLC only when revenue justifies liability protection.
5.2 Pricing Strategy
Table
Copy
Tier	Monthly Price	Annual Price	Features
Starter	$29	$290 (2 months free)	1 bank account, 500 transactions/mo, basic reconciliation, email support
Growth	$99	$990	3 bank accounts, unlimited transactions, AI matching, VAT reports, API access
Enterprise	$499	$4,990	Unlimited accounts, white-label, SLA, dedicated success (AI-only)
No free tier. Free tiers attract non-paying users who consume support. 14-day trial with full features, then pay or lose access.
5.3 Go-to-Market Playbook
Month 1-2: Build
Abu Dhabi license application
Aam sandbox access request (CBUAE)
Emirates NBD Open Banking dev account
MVP: Connect one bank, reconcile one transaction type
Month 3-4: Validate
10 beta users from personal network (real estate agents, traders)
Daily standups via Loom video updates (async, no meetings)
Iterate on reconciliation accuracy (target 90%+ auto-match)
Month 5-6: Launch
Product Hunt launch (target #1 Product of the Day)
LinkedIn content: "The Aam payment revolution" (daily posts)
SEO: "UAE instant payment reconciliation," "Aam API integration"
Partnership: Odoo UAE implementers (they need bank connectors)
Month 7-12: Scale
Jaywan launch (ride the PR wave)
Saudi AFAQ expansion (Arabic localization)
Developer API public launch
5.4 Zero-Employee Operations
Table
Copy
Function	Tool/Method	Cost
Development	Me + GitHub Copilot + Claude Code	$40/mo
CI/CD	GitHub Actions → AWS Dubai	$50/mo
Hosting	AWS Dubai (EC2, RDS, S3)	$200/mo
Monitoring	Datadog / Sentry	$50/mo
Support	Intercom AI (Fin)	$75/mo
Accounting	AamFlow (dogfood)	$0
Legal	Standardized SaaS terms (no negotiation)	$0
Sales	SEO + Content + Product Hunt	$0 (time)
Community	Discord/Slack (async only)	$0
Total Monthly Burn: ~$700 (covered by 7 Growth-tier customers or 24 Starter-tier)
6. Risk Management
6.1 Technical Risks
Table
Copy
Risk	Mitigation
Aam API changes	Abstract integration layer, versioned API client
Bank API downtime	Queue-based architecture, retry logic, user notifications
Reconciliation accuracy	Human-in-the-loop for low-confidence matches (founder reviews daily)
Data breaches	Encryption at rest (AES-256), in transit (TLS 1.3), no PII in logs
VAT calculation errors	Conservative rules, clear disclaimers, manual override always available
6.2 Business Risks
Table
Copy
Risk	Mitigation
CBUAE regulation changes	Maintain close relationship, over-comply, join Fintech Association
Big player entry (Stripe, Brex)	Focus on UAE compliance complexity as moat, be acquisition target
Customer concentration	Limit any customer to 10% of revenue (enforced by pricing tiers)
Founder burnout	4-hour focused work blocks, no meetings, async everything
6.3 Compliance Checklist
[ ] Data Residency: All UAE customer data in AWS Dubai region
[ ] FTA Registration: VAT registration if revenue exceeds threshold
[ ] CBUAE Licensing: Determine if Payment Service Provider license required (likely not, as software layer only)
[ ] Cybersecurity: ISO 27001 prep (not certified initially, but framework followed)
[ ] Audit Trail: Immutable transaction logs (Laravel's built-in auditing)
7. Success Metrics
7.1 North Star Metric
Daily Active Reconciliations (DAR): Number of transactions auto-reconciled per day
7.2 Key Metrics
Table
Copy
Metric	Target (Month 6)	Target (Month 12)
Monthly Recurring Revenue (MRR)	$5,000	$25,000
Customers	50	200
Transaction Volume (monthly)	10,000	100,000
Auto-reconciliation Rate	85%	95%
Churn Rate	<5%	<3%
CAC	<$100	<$50
LTV:CAC Ratio	>3:1	>5:1
7.3 Technical Metrics
Table
Copy
Metric	Target
API Uptime	99.9%
Reconciliation Latency	<5 seconds
Bank Sync Frequency	Every 15 minutes
Support Response (AI)	<1 minute
Support Response (Human)	<4 hours (business days only)
8. Decision Log
Table
Copy
Date	Decision	Rationale	Reversible?
2025-02-09	Choose AamFlow concept	Regulatory tailwinds, technical fit, underserved	Yes (pivot in 3 months if no traction)
2025-02-09	Abu Dhabi Freelance License	Cheapest, fastest, prohibits employees (constraint)	Yes (upgrade to LLC later)
2025-02-09	Laravel + MERN stack	Compliance needs Laravel, UX needs MERN	No (sunk cost after MVP)
2025-02-09	No free tier	Quality over quantity, sustainable support	Yes (could add later)
2025-02-09	Real estate agents as beachhead	High transaction volume, tech-forward, accessible	Yes (pivot to trading companies if needed)
9. Reference Links & Resources
Regulatory
CBUAE Aam Platform
CBUAE Open Finance Regulation 
FTA VAT Guidance
Industry Data
KPMG UAE Fintech Report 2024 
CBUAE Payment Systems Annual Report 
Dubai Chamber Digital Economy Report 
Technical
Laravel Cashier (Stripe) — for subscriptions
MongoDB Atlas UAE Region — data residency
AWS Dubai Region — hosting compliance
Competitors
Oncount 
Hisabkitab 
Wafeer 
10. Daily Operating Principles
No meetings. Async communication only (Loom, Notion, GitHub issues).
Ship daily. Code commits every day, no exceptions.
Talk to customers. One customer conversation per day (written, not video call).
Metrics first. Check DAR, MRR, churn before writing code.
Compliance by design. Every feature reviewed for UAE regulatory fit.
Automate or eliminate. If it requires a human process, don't build it.
Next Actions:
[ ] Apply for Abu Dhabi Freelance License (Tamm platform)
[ ] Request Aam sandbox access from CBUAE
[ ] Open Emirates NBD business account (or Wio Business)
[ ] Set up AWS Dubai region infrastructure
[ ] Build Laravel API client for Aam sandbox
This document is a living reference. Update weekly with learnings, pivot decisions, and metric progress.
Copy

I've created a comprehensive `agents.md` file that serves as your single source of truth for building AamFlow. This includes:

**Key Sections:**
- **Executive Summary** — The core thesis and differentiation
- **Founder Context** — Your constraints and stack rationale
- **Market Context** — Regulatory environment (Aam, Open Finance, Digital Dirham), competitive landscape, target segments
- **Product Specification** — 3-phase roadmap, technical architecture, database schema
- **Business Operations** — Legal structure (Abu Dhabi Freelance License), pricing, GTM playbook, zero-employee ops stack
- **Risk Management** — Technical, business, and compliance risks with mitigations
- **Success Metrics** — North Star (Daily Active Reconciliations) and KPIs
- **Decision Log** — Track reversible vs. irreversible decisions
- **References** — Links to all regulatory and industry sources
- **Daily Operating Principles** — Your solo founder rules

**Critical Design Decisions Documented:**
- Why Abu Dhabi Freelance License over Dubai (cheaper, still covers Dubai operations)
- Why Laravel for backend (audit trails, VAT complexity) + MERN for frontend (speed)
- Why no free tier (sustainable support costs)
- Why real estate agents as beachhead (high transaction volume, Aam fits rental deposits)

This document should be your reference for every technical and business decision. Update the Decision Log weekly, track metrics in the Success Metrics section, and use the Daily Operating Principles to maintain focus.
