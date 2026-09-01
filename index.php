<!DOCTYPE html>
<html lang="pt-BR" data-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>DataGen BR — Gerador de Dados Fictícios Brasileiros</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&family=Inter:wght@400;500;600;700&family=JetBrains+Mono:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    
    <style>
        :root {
            --font-main: 'Plus Jakarta Sans', 'Inter', -apple-system, BlinkMacSystemFont, sans-serif;
            --font-mono: 'JetBrains Mono', monospace;
            --radius-sm: 8px;
            --radius-md: 12px;
            --radius-lg: 16px;
            --radius-xl: 20px;
            --transition: all 0.25s cubic-bezier(0.16, 1, 0.3, 1);
        }

        /* DARK THEME (DEFAULT) */
        [data-theme="dark"] {
            --bg-body: #090d16;
            --bg-surface: #0f172a;
            --bg-card: rgba(19, 29, 49, 0.75);
            --bg-card-hover: rgba(28, 41, 68, 0.85);
            --bg-input: #131d31;
            --bg-input-focus: #1a2742;
            --bg-tag: rgba(99, 102, 241, 0.15);
            
            --border-subtle: rgba(255, 255, 255, 0.07);
            --border-default: rgba(255, 255, 255, 0.12);
            --border-focus: #6366f1;
            
            --text-primary: #f8fafc;
            --text-secondary: #94a3b8;
            --text-muted: #64748b;
            
            --accent-primary: #6366f1;
            --accent-primary-hover: #4f46e5;
            --accent-gradient: linear-gradient(135deg, #6366f1 0%, #8b5cf6 50%, #d946ef 100%);
            --accent-glow: rgba(99, 102, 241, 0.35);
            
            --color-personal: #38bdf8;
            --color-work: #3b82f6;
            --color-docs: #10b981;
            --color-bank: #06b6d4;
            --color-card: #f59e0b;
            --color-vehicle: #a855f7;
            --color-company: #ec4899;

            --card-shadow: 0 10px 30px -10px rgba(0, 0, 0, 0.5), 0 0 0 1px rgba(255, 255, 255, 0.05);
            --card-glass: blur(20px);
            --hero-pattern: radial-gradient(circle at 50% -20%, rgba(99, 102, 241, 0.18), transparent 70%);
        }

        /* LIGHT THEME */
        [data-theme="light"] {
            --bg-body: #f1f5f9;
            --bg-surface: #ffffff;
            --bg-card: #ffffff;
            --bg-card-hover: #ffffff;
            --bg-input: #f8fafc;
            --bg-input-focus: #ffffff;
            --bg-tag: rgba(99, 102, 241, 0.1);
            
            --border-subtle: rgba(0, 0, 0, 0.06);
            --border-default: rgba(0, 0, 0, 0.12);
            --border-focus: #6366f1;
            
            --text-primary: #0f172a;
            --text-secondary: #475569;
            --text-muted: #94a3b8;
            
            --accent-primary: #4f46e5;
            --accent-primary-hover: #4338ca;
            --accent-gradient: linear-gradient(135deg, #4f46e5 0%, #7c3aed 50%, #c026d3 100%);
            --accent-glow: rgba(79, 70, 229, 0.25);
            
            --color-personal: #0284c7;
            --color-work: #2563eb;
            --color-docs: #059669;
            --color-bank: #0891b2;
            --color-card: #d97706;
            --color-vehicle: #7e22ce;
            --color-company: #db2777;

            --card-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.05), 0 0 0 1px rgba(0, 0, 0, 0.06);
            --card-glass: none;
            --hero-pattern: radial-gradient(circle at 50% -20%, rgba(99, 102, 241, 0.12), transparent 70%);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box !important;
            font-family: var(--font-main);
            -webkit-font-smoothing: antialiased;
        }

        body {
            background-color: var(--bg-body);
            background-image: var(--hero-pattern);
            background-attachment: fixed;
            color: var(--text-primary);
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            transition: background-color 0.3s ease, color 0.3s ease;
            overflow-x: hidden;
        }

        /* TOP NAVIGATION */
        .navbar {
            height: 64px;
            width: 100%;
            border-bottom: 1px solid var(--border-subtle);
            background: var(--bg-surface);
            backdrop-filter: blur(12px);
            position: sticky;
            top: 0;
            z-index: 100;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0 24px;
        }

        .nav-left {
            display: flex;
            align-items: center;
            gap: 16px;
        }

        .back-link {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            font-size: 13px;
            font-weight: 600;
            color: var(--text-secondary);
            text-decoration: none;
            padding: 6px 12px;
            border-radius: var(--radius-sm);
            background: var(--bg-input);
            border: 1px solid var(--border-subtle);
            transition: var(--transition);
        }
        .back-link:hover {
            color: var(--text-primary);
            border-color: var(--border-default);
            transform: translateX(-2px);
        }

        .nav-brand {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .brand-badge-icon {
            width: 34px;
            height: 34px;
            border-radius: 10px;
            background: var(--accent-gradient);
            display: flex;
            align-items: center;
            justify-content: center;
            color: #ffffff;
            font-size: 16px;
            box-shadow: 0 4px 12px var(--accent-glow);
        }

        .brand-title {
            font-size: 17px;
            font-weight: 800;
            letter-spacing: -0.02em;
            display: flex;
            align-items: center;
            gap: 4px;
        }
        .brand-title .data { color: var(--text-primary); }
        .brand-title .gen { color: #818cf8; }
        .brand-title .br {
            background: linear-gradient(135deg, #10b981 0%, #f59e0b 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            font-size: 14px;
            margin-left: 2px;
        }

        .nav-right {
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .theme-btn {
            width: 38px;
            height: 38px;
            border-radius: var(--radius-md);
            border: 1px solid var(--border-default);
            background: var(--bg-input);
            color: var(--text-primary);
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            font-size: 15px;
            transition: var(--transition);
        }
        .theme-btn:hover {
            border-color: var(--accent-primary);
            transform: scale(1.05);
        }

        .status-pill {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            padding: 4px 10px;
            border-radius: 999px;
            background: rgba(16, 185, 129, 0.12);
            border: 1px solid rgba(16, 185, 129, 0.25);
            color: #10b981;
            font-size: 11px;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 0.04em;
        }
        .status-dot {
            width: 6px;
            height: 6px;
            border-radius: 50%;
            background: #10b981;
            box-shadow: 0 0 8px #10b981;
        }

        /* MAIN CONTAINER — RIGID 100% UNIFORM WIDTH ALIGNMENT */
        .container {
            max-width: 1440px;
            width: 100%;
            margin: 0 auto;
            padding: 24px 20px 60px;
            flex: 1;
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        /* DISCLAIMER BANNER */
        .disclaimer-card {
            width: 100%;
            background: rgba(245, 158, 11, 0.08);
            border: 1px solid rgba(245, 158, 11, 0.25);
            border-radius: var(--radius-md);
            padding: 12px 18px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 16px;
        }
        .disclaimer-content {
            display: flex;
            align-items: center;
            gap: 12px;
            font-size: 12.5px;
            color: var(--text-secondary);
        }
        .disclaimer-icon {
            font-size: 18px;
            color: #f59e0b;
            flex-shrink: 0;
        }
        .consent-label {
            display: flex;
            align-items: center;
            gap: 8px;
            cursor: pointer;
            font-size: 12.5px;
            font-weight: 600;
            color: var(--text-primary);
            user-select: none;
            white-space: nowrap;
        }
        .consent-checkbox {
            appearance: none;
            width: 18px;
            height: 18px;
            border-radius: 5px;
            border: 2px solid #f59e0b;
            background: transparent;
            cursor: pointer;
            position: relative;
            transition: var(--transition);
        }
        .consent-checkbox:checked {
            background: #f59e0b;
        }
        .consent-checkbox:checked::after {
            content: '00c';
            font-family: 'Font Awesome 6 Free';
            font-weight: 900;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: #000;
            font-size: 10px;
        }

        /* CONTROL PANEL (HERO) */
        .controls-card {
            width: 100%;
            background: var(--bg-card);
            backdrop-filter: var(--card-glass);
            border: 1px solid var(--border-default);
            border-radius: var(--radius-lg);
            padding: 20px 24px;
            box-shadow: var(--card-shadow);
        }

        .controls-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(180px, 1fr));
            gap: 16px;
            align-items: flex-end;
            margin-bottom: 18px;
        }

        .control-group {
            display: flex;
            flex-direction: column;
            gap: 6px;
        }

        .control-label {
            font-size: 11.5px;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 0.05em;
            color: var(--text-muted);
            display: flex;
            align-items: center;
            gap: 6px;
        }

        .select-input, .text-input {
            width: 100%;
            height: 42px;
            background: var(--bg-input);
            border: 1px solid var(--border-default);
            border-radius: var(--radius-md);
            color: var(--text-primary);
            padding: 0 14px;
            font-size: 13.5px;
            font-weight: 600;
            outline: none;
            transition: var(--transition);
            cursor: pointer;
        }
        .select-input:focus, .text-input:focus {
            border-color: var(--border-focus);
            background: var(--bg-input-focus);
            box-shadow: 0 0 0 3px rgba(99, 102, 241, 0.2);
        }

        .toggle-switch-wrapper {
            height: 42px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            background: var(--bg-input);
            border: 1px solid var(--border-default);
            border-radius: var(--radius-md);
            padding: 0 14px;
            cursor: pointer;
            user-select: none;
            transition: var(--transition);
        }
        .toggle-switch-wrapper:hover {
            border-color: var(--border-focus);
        }
        .toggle-switch-label {
            font-size: 13px;
            font-weight: 600;
            color: var(--text-primary);
            display: flex;
            align-items: center;
            gap: 6px;
        }
        .toggle-checkbox {
            appearance: none;
            width: 38px;
            height: 22px;
            border-radius: 999px;
            background: var(--border-default);
            position: relative;
            cursor: pointer;
            outline: none;
            transition: var(--transition);
        }
        .toggle-checkbox::before {
            content: '';
            position: absolute;
            width: 16px;
            height: 16px;
            border-radius: 50%;
            background: #ffffff;
            top: 3px;
            left: 3px;
            transition: var(--transition);
        }
        .toggle-checkbox:checked {
            background: var(--accent-primary);
        }
        .toggle-checkbox:checked::before {
            transform: translateX(16px);
        }

        /* BUTTONS ROW */
        .actions-row {
            display: flex;
            align-items: center;
            justify-content: space-between;
            flex-wrap: wrap;
            gap: 12px;
            padding-top: 14px;
            border-top: 1px solid var(--border-subtle);
        }

        .actions-primary {
            display: flex;
            align-items: center;
            gap: 10px;
            flex-wrap: wrap;
        }

        .btn {
            height: 42px;
            padding: 0 18px;
            border-radius: var(--radius-md);
            font-size: 13.5px;
            font-weight: 700;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
            border: 1px solid transparent;
            cursor: pointer;
            transition: var(--transition);
            text-decoration: none;
        }
        .btn:disabled {
            opacity: 0.45;
            cursor: not-allowed;
            filter: grayscale(1);
        }

        .btn-generate {
            background: var(--accent-gradient);
            color: #ffffff;
            box-shadow: 0 4px 20px var(--accent-glow);
            padding: 0 24px;
            font-size: 14.5px;
        }
        .btn-generate:not(:disabled):hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 25px var(--accent-glow);
        }

        .btn-secondary {
            background: var(--bg-input);
            border-color: var(--border-default);
            color: var(--text-primary);
        }
        .btn-secondary:not(:disabled):hover {
            border-color: var(--accent-primary);
            background: var(--bg-input-focus);
            transform: translateY(-1px);
        }

        .btn-json {
            background: rgba(16, 185, 129, 0.12);
            border-color: rgba(16, 185, 129, 0.25);
            color: #10b981;
        }
        .btn-json:not(:disabled):hover {
            background: #10b981;
            color: #ffffff;
        }

        .btn-csv {
            background: rgba(245, 158, 11, 0.12);
            border-color: rgba(245, 158, 11, 0.25);
            color: #f59e0b;
        }
        .btn-csv:not(:disabled):hover {
            background: #f59e0b;
            color: #ffffff;
        }

        /* EMPTY STATE / PLACEHOLDER */
        .empty-state {
            width: 100%;
            padding: 60px 20px;
            text-align: center;
            background: var(--bg-card);
            border: 1px dashed var(--border-default);
            border-radius: var(--radius-lg);
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            gap: 12px;
        }
        .empty-icon {
            width: 60px;
            height: 60px;
            border-radius: 16px;
            background: var(--bg-input);
            border: 1px solid var(--border-default);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 26px;
            color: var(--accent-primary);
        }
        .empty-title {
            font-size: 16px;
            font-weight: 700;
            color: var(--text-primary);
        }
        .empty-desc {
            font-size: 13px;
            color: var(--text-secondary);
            max-width: 400px;
        }

        /* OUTPUT GRID (STRICT 3-COLUMN LAYOUT ALIGNED 1:1 WITH HERO CARDS) */
        .output-grid {
            display: grid;
            width: 100%;
            grid-template-columns: repeat(1, minmax(0, 1fr));
            gap: 20px;
        }
        @media (min-width: 900px) {
            .output-grid {
                grid-template-columns: repeat(2, minmax(0, 1fr));
            }
        }
        @media (min-width: 1200px) {
            .output-grid {
                grid-template-columns: repeat(3, minmax(0, 1fr));
            }
        }

        .grid-column {
            display: flex;
            flex-direction: column;
            gap: 20px;
            min-width: 0;
            width: 100%;
        }

        /* DATA CATEGORY CARD */
        .data-card {
            width: 100%;
            min-width: 0;
            background: var(--bg-card);
            backdrop-filter: var(--card-glass);
            border: 1px solid var(--border-default);
            border-radius: var(--radius-lg);
            padding: 18px 20px;
            box-shadow: var(--card-shadow);
            transition: var(--transition);
        }
        .data-card:hover {
            border-color: var(--border-focus);
            box-shadow: 0 12px 32px -8px rgba(0,0,0,0.3);
        }

        .card-header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 14px;
            padding-bottom: 10px;
            border-bottom: 1px solid var(--border-subtle);
        }

        .card-title-group {
            display: flex;
            align-items: center;
            gap: 10px;
            min-width: 0;
        }

        .category-icon {
            width: 32px;
            height: 32px;
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 14px;
            color: #ffffff;
            flex-shrink: 0;
        }

        .icon-personal { background: linear-gradient(135deg, #0284c7, #38bdf8); }
        .icon-work { background: linear-gradient(135deg, #1e40af, #3b82f6); }
        .icon-docs { background: linear-gradient(135deg, #059669, #34d399); }
        .icon-bank { background: linear-gradient(135deg, #0891b2, #22d3ee); }
        .icon-card { background: linear-gradient(135deg, #d97706, #fbbf24); }
        .icon-vehicle { background: linear-gradient(135deg, #7e22ce, #c084fc); }
        .icon-company { background: linear-gradient(135deg, #db2777, #f472b6); }

        .card-title {
            font-size: 15px;
            font-weight: 700;
            color: var(--text-primary);
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap;
        }

        .copy-section-btn {
            background: transparent;
            border: none;
            color: var(--text-muted);
            cursor: pointer;
            font-size: 12px;
            font-weight: 600;
            padding: 4px 8px;
            border-radius: 6px;
            transition: var(--transition);
            display: flex;
            align-items: center;
            gap: 4px;
            flex-shrink: 0;
        }
        .copy-section-btn:hover {
            color: var(--accent-primary);
            background: var(--bg-tag);
        }

        /* DATA ROWS */
        .data-rows-list {
            display: flex;
            flex-direction: column;
            gap: 7px;
            width: 100%;
            min-width: 0;
        }

        .data-item-row {
            width: 100%;
            min-width: 0;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 12px;
            padding: 7px 10px;
            background: var(--bg-input);
            border: 1px solid var(--border-subtle);
            border-radius: var(--radius-sm);
            cursor: pointer;
            transition: var(--transition);
            position: relative;
        }
        .data-item-row:hover {
            background: var(--bg-input-focus);
            border-color: var(--accent-primary);
            transform: translateX(2px);
        }

        .data-item-label {
            font-size: 11px;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 0.04em;
            color: var(--text-muted);
            white-space: nowrap;
            flex-shrink: 0;
            max-width: 130px;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        .data-item-value {
            font-family: var(--font-mono);
            font-size: 12px;
            font-weight: 600;
            color: var(--text-primary);
            text-align: right;
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap;
            flex: 1;
            min-width: 0;
        }

        .data-item-copy-icon {
            color: var(--text-muted);
            font-size: 11px;
            opacity: 0;
            transition: opacity 0.2s;
            flex-shrink: 0;
        }
        .data-item-row:hover .data-item-copy-icon {
            opacity: 1;
            color: var(--accent-primary);
        }

        /* ======================================================== */
        /* VISUAL CARD MOCKUPS (HERO COMPONENTS) */
        /* ======================================================== */

        /* 1. PROFILE / PERSON BADGE MOCKUP */
        .person-profile-mockup {
            background: linear-gradient(135deg, rgba(2, 132, 199, 0.16) 0%, rgba(56, 189, 248, 0.06) 100%);
            border: 1px solid rgba(56, 189, 248, 0.3);
            border-radius: var(--radius-md);
            padding: 14px 16px;
            margin-bottom: 12px;
            display: flex;
            flex-direction: column;
            gap: 10px;
            position: relative;
            overflow: hidden;
        }
        .person-profile-header {
            display: flex;
            align-items: center;
            gap: 12px;
        }
        .person-avatar-circle {
            width: 48px;
            height: 48px;
            border-radius: 50%;
            background: linear-gradient(135deg, #0284c7 0%, #38bdf8 100%);
            color: #ffffff;
            font-size: 18px;
            font-weight: 800;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 4px 14px rgba(2, 132, 199, 0.35);
            flex-shrink: 0;
            border: 2px solid rgba(255,255,255,0.3);
        }
        .person-profile-name {
            font-size: 14.5px;
            font-weight: 800;
            color: var(--text-primary);
            line-height: 1.25;
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap;
        }
        .person-profile-location {
            font-size: 11.5px;
            color: var(--text-secondary);
            display: flex;
            align-items: center;
            gap: 5px;
            margin-top: 3px;
        }
        .person-tags-row {
            display: flex;
            flex-wrap: wrap;
            gap: 6px;
        }
        .person-tag-pill {
            padding: 3px 8px;
            border-radius: 999px;
            font-size: 11px;
            font-weight: 700;
            background: var(--bg-input);
            border: 1px solid var(--border-default);
            color: var(--text-secondary);
            display: inline-flex;
            align-items: center;
            gap: 4px;
        }

        /* 2. CTPS DIGITAL MOCKUP (WORK & OCCUPATION) */
        .ctps-digital-mockup {
            background: linear-gradient(135deg, #1e3a8a 0%, #1e40af 50%, #2563eb 100%);
            border: 1px solid rgba(147, 197, 253, 0.35);
            border-radius: var(--radius-md);
            padding: 13px 15px;
            margin-bottom: 12px;
            color: #ffffff;
            position: relative;
            overflow: hidden;
            box-shadow: 0 8px 24px rgba(30, 58, 138, 0.35);
        }
        .ctps-top-bar {
            display: flex;
            align-items: center;
            justify-content: space-between;
            font-size: 9px;
            font-weight: 800;
            letter-spacing: 0.08em;
            text-transform: uppercase;
            color: #bfdbfe;
            border-bottom: 1px dashed rgba(255, 255, 255, 0.25);
            padding-bottom: 5px;
            margin-bottom: 8px;
        }
        .ctps-job-title {
            font-size: 14px;
            font-weight: 800;
            color: #ffffff;
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap;
        }
        .ctps-salary-badge {
            font-family: var(--font-mono);
            font-size: 13.5px;
            font-weight: 800;
            color: #93c5fd;
            margin-top: 2px;
        }
        .ctps-details-row {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-top: 6px;
            font-size: 10px;
            color: #dbeafe;
        }

        /* 3. CNH / DOCUMENT DIGITAL MOCKUP */
        .cnh-digital-mockup {
            background: linear-gradient(135deg, #064e3b 0%, #065f46 60%, #047857 100%);
            border: 1px solid rgba(52, 211, 153, 0.35);
            border-radius: var(--radius-md);
            padding: 13px 15px;
            margin-bottom: 12px;
            color: #ecfdf5;
            position: relative;
            overflow: hidden;
            box-shadow: 0 8px 24px rgba(6, 78, 59, 0.35);
        }
        .cnh-top-bar {
            display: flex;
            align-items: center;
            justify-content: space-between;
            font-size: 9.5px;
            font-weight: 800;
            letter-spacing: 0.08em;
            text-transform: uppercase;
            color: #6ee7b7;
            border-bottom: 1px dashed rgba(255, 255, 255, 0.2);
            padding-bottom: 5px;
            margin-bottom: 8px;
        }
        .cnh-body {
            display: flex;
            gap: 12px;
            align-items: center;
        }
        .cnh-photo-box {
            width: 44px;
            height: 54px;
            border-radius: 4px;
            background: rgba(0, 0, 0, 0.3);
            border: 1px solid rgba(255, 255, 255, 0.2);
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            font-size: 20px;
            color: #a7f3d0;
            flex-shrink: 0;
        }
        .cnh-info-group {
            flex: 1;
            display: flex;
            flex-direction: column;
            gap: 2px;
            overflow: hidden;
        }
        .cnh-cpf-highlight {
            font-family: var(--font-mono);
            font-size: 14px;
            font-weight: 800;
            color: #ffffff;
            letter-spacing: 0.04em;
        }
        .cnh-rg-label {
            font-size: 10.5px;
            color: #a7f3d0;
            font-family: var(--font-mono);
        }
        .cnh-category-badge {
            align-self: flex-start;
            background: rgba(0, 0, 0, 0.25);
            border: 1px solid #34d399;
            color: #ffffff;
            font-size: 9.5px;
            font-weight: 800;
            padding: 2px 6px;
            border-radius: 4px;
            margin-top: 3px;
        }

        /* 4. BANK DIGITAL MOCKUP */
        .bank-account-mockup {
            border-radius: var(--radius-md);
            padding: 14px 16px;
            margin-bottom: 12px;
            color: #ffffff;
            position: relative;
            overflow: hidden;
            box-shadow: 0 8px 24px rgba(0, 0, 0, 0.3);
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            min-height: 105px;
        }
        .bank-mock-top {
            display: flex;
            align-items: center;
            justify-content: space-between;
        }
        .bank-name-badge {
            font-size: 13.5px;
            font-weight: 800;
            display: flex;
            align-items: center;
            gap: 8px;
        }
        .bank-account-type {
            font-size: 9.5px;
            font-weight: 700;
            text-transform: uppercase;
            background: rgba(255, 255, 255, 0.2);
            padding: 2px 8px;
            border-radius: 999px;
        }
        .bank-numbers-row {
            display: flex;
            align-items: center;
            gap: 18px;
            margin-top: 8px;
        }
        .bank-field-col {
            display: flex;
            flex-direction: column;
        }
        .bank-field-label {
            font-size: 8.5px;
            text-transform: uppercase;
            color: rgba(255, 255, 255, 0.75);
            font-weight: 700;
            letter-spacing: 0.05em;
        }
        .bank-field-val {
            font-family: var(--font-mono);
            font-size: 13.5px;
            font-weight: 700;
            letter-spacing: 0.04em;
        }

        /* 5. CREDIT CARD MOCKUP */
        .credit-card-mockup {
            width: 100%;
            height: 160px;
            border-radius: var(--radius-md);
            background: linear-gradient(135deg, #1e1b4b 0%, #312e81 50%, #4338ca 100%);
            border: 1px solid rgba(255, 255, 255, 0.18);
            padding: 15px 18px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            color: #ffffff;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.4);
            margin-bottom: 12px;
            position: relative;
            overflow: hidden;
            user-select: none;
        }
        .credit-card-mockup::before {
            content: '';
            position: absolute;
            width: 240px;
            height: 240px;
            background: radial-gradient(circle, rgba(255,255,255,0.12) 0%, transparent 65%);
            top: -90px;
            right: -50px;
            border-radius: 50%;
        }

        .card-mock-top {
            display: flex;
            align-items: center;
            justify-content: space-between;
        }
        .card-chip {
            width: 34px;
            height: 24px;
            background: linear-gradient(135deg, #fbbf24 0%, #d97706 100%);
            border-radius: 4px;
            border: 1px solid rgba(0,0,0,0.2);
            position: relative;
        }
        .card-chip::after {
            content: '';
            position: absolute;
            top: 5px;
            left: 5px;
            right: 5px;
            bottom: 5px;
            border: 1px solid rgba(0,0,0,0.3);
            border-radius: 2px;
        }
        .card-brand-logo {
            font-size: 17px;
            font-weight: 800;
            font-style: italic;
            letter-spacing: 0.05em;
            color: #ffffff;
            text-shadow: 0 2px 4px rgba(0,0,0,0.3);
        }

        .card-mock-number {
            font-family: var(--font-mono);
            font-size: 15px;
            font-weight: 700;
            letter-spacing: 0.12em;
            text-shadow: 0 2px 4px rgba(0,0,0,0.4);
        }

        .card-mock-bottom {
            display: flex;
            align-items: flex-end;
            justify-content: space-between;
        }
        .card-holder-name {
            font-size: 10.5px;
            text-transform: uppercase;
            font-weight: 600;
            letter-spacing: 0.05em;
            color: rgba(255,255,255,0.85);
            max-width: 170px;
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap;
        }
        .card-expiry-info {
            display: flex;
            gap: 10px;
            font-size: 9.5px;
            font-family: var(--font-mono);
            color: rgba(255,255,255,0.9);
        }
        .card-expiry-info span strong {
            font-size: 10.5px;
            margin-left: 2px;
        }

        /* 6. PLACA MERCOSUL MOCKUP */
        .mercosul-plate-mockup {
            background: #ffffff;
            border: 3px solid #1e293b;
            border-radius: 8px;
            padding: 0;
            margin-bottom: 12px;
            box-shadow: 0 6px 18px rgba(0, 0, 0, 0.25);
            overflow: hidden;
            user-select: none;
        }
        .plate-blue-strip {
            background: #003399;
            color: #ffffff;
            height: 22px;
            padding: 0 10px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            font-size: 9.5px;
            font-weight: 800;
            letter-spacing: 0.12em;
        }
        .plate-stars-flag {
            display: flex;
            align-items: center;
            gap: 6px;
        }
        .plate-brazil-flag {
            width: 15px;
            height: 10px;
            background: #009c3b;
            border-radius: 1px;
            position: relative;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .plate-brazil-flag::before {
            content: '';
            width: 9px;
            height: 6px;
            background: #ffdf00;
            clip-path: polygon(50% 0%, 100% 50%, 50% 100%, 0% 50%);
        }
        .plate-letters-box {
            text-align: center;
            padding: 6px 10px 8px;
            background: #ffffff;
        }
        .plate-letters {
            font-family: 'JetBrains Mono', 'Segoe UI Black', Impact, sans-serif;
            font-size: 24px;
            font-weight: 900;
            color: #000000;
            letter-spacing: 0.18em;
            line-height: 1;
            text-shadow: 1px 1px 0px rgba(0,0,0,0.15);
        }
        .vehicle-model-pill {
            margin-top: 5px;
            font-size: 10.5px;
            font-weight: 700;
            color: #475569;
            text-transform: uppercase;
            letter-spacing: 0.03em;
        }

        /* 7. COMPANY CNPJ MOCKUP */
        .cnpj-card-mockup {
            background: linear-gradient(135deg, #1e293b 0%, #0f172a 100%);
            border: 1px solid rgba(236, 72, 153, 0.35);
            border-radius: var(--radius-md);
            padding: 13px 15px;
            margin-bottom: 12px;
            color: #ffffff;
            box-shadow: 0 8px 24px rgba(236, 72, 153, 0.15);
        }
        .cnpj-top {
            display: flex;
            align-items: center;
            justify-content: space-between;
            font-size: 9px;
            font-weight: 800;
            text-transform: uppercase;
            color: #f472b6;
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
            padding-bottom: 5px;
            margin-bottom: 7px;
        }
        .cnpj-status-tag {
            background: rgba(16, 185, 129, 0.2);
            border: 1px solid #10b981;
            color: #10b981;
            font-size: 8.5px;
            font-weight: 800;
            padding: 2px 6px;
            border-radius: 4px;
        }
        .cnpj-highlight-num {
            font-family: var(--font-mono);
            font-size: 15px;
            font-weight: 800;
            color: #ffffff;
            letter-spacing: 0.04em;
            margin-bottom: 3px;
        }
        .cnpj-company-name {
            font-size: 11.5px;
            font-weight: 700;
            color: #e2e8f0;
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap;
        }

        /* HISTORY DRAWER */
        .history-panel {
            background: var(--bg-card);
            border: 1px solid var(--border-default);
            border-radius: var(--radius-lg);
            padding: 20px;
            margin-bottom: 24px;
            display: none;
        }
        .history-header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 14px;
            padding-bottom: 10px;
            border-bottom: 1px solid var(--border-subtle);
        }
        .history-list {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
            gap: 10px;
            max-height: 250px;
            overflow-y: auto;
        }
        .history-item {
            background: var(--bg-input);
            border: 1px solid var(--border-subtle);
            border-radius: var(--radius-md);
            padding: 10px 14px;
            cursor: pointer;
            transition: var(--transition);
            display: flex;
            flex-direction: column;
            gap: 4px;
        }
        .history-item:hover {
            border-color: var(--accent-primary);
            background: var(--bg-input-focus);
        }
        .history-name {
            font-weight: 700;
            font-size: 13px;
            color: var(--text-primary);
        }
        .history-meta {
            font-family: var(--font-mono);
            font-size: 11px;
            color: var(--text-muted);
            display: flex;
            justify-content: space-between;
        }

        /* TOAST NOTIFICATION */
        .toast-container {
            position: fixed;
            bottom: 24px;
            right: 24px;
            z-index: 1000;
            display: flex;
            flex-direction: column;
            gap: 8px;
            pointer-events: none;
        }
        .toast {
            background: var(--bg-surface);
            border: 1px solid var(--border-default);
            color: var(--text-primary);
            padding: 12px 18px;
            border-radius: var(--radius-md);
            font-size: 13px;
            font-weight: 600;
            box-shadow: 0 10px 30px rgba(0,0,0,0.3);
            display: flex;
            align-items: center;
            gap: 10px;
            opacity: 0;
            transform: translateY(12px);
            transition: all 0.3s cubic-bezier(0.16, 1, 0.3, 1);
            pointer-events: auto;
        }
        .toast.show {
            opacity: 1;
            transform: translateY(0);
        }
        .toast.success i { color: #10b981; }
        .toast.info i { color: #38bdf8; }

        /* ANIMATION UTILS */
        .fade-in {
            animation: fadeIn 0.35s ease-out forwards;
        }
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(8px); }
            to { opacity: 1; transform: translateY(0); }
        }

        /* FOOTER CLEAN (SUITE 4U.IA.BR STANDARD) */
        .footer-clean {
            text-align: center;
            padding: 30px 20px;
            font-size: 12px;
            color: var(--text-muted);
            border-top: 1px solid var(--border-subtle);
            background: var(--bg-surface);
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 10px;
            margin-top: auto;
        }
        .footer-brand {
            font-weight: 700;
            font-size: 13.5px;
            color: var(--text-primary);
            display: flex;
            align-items: center;
            gap: 8px;
        }
        .footer-brand i { color: var(--accent-primary); font-size: 16px; }
        .footer-links {
            display: flex;
            align-items: center;
            gap: 12px;
            font-size: 12.5px;
            font-weight: 600;
        }
        .footer-links a {
            color: var(--text-secondary);
            text-decoration: none;
            transition: var(--transition);
        }
        .footer-links a:hover {
            color: var(--accent-primary);
            text-decoration: underline;
        }
        .footer-links .sep {
            color: var(--border-default);
            font-size: 10px;
        }
        .footer-copyright {
            font-size: 11.5px;
            color: var(--text-muted);
        }
    </style>
</head>
<body>

    <!-- NAVBAR -->
    <nav class="navbar">
        <div class="nav-left">
            <a href="../index.php" class="back-link">
                <i class="fas fa-arrow-left"></i>
                <span>Meus Aplicativos</span>
            </a>
            <div class="nav-brand">
                <div class="brand-badge-icon">
                    <i class="fas fa-fingerprint"></i>
                </div>
                <div class="brand-title">
                    <span class="data">Data</span><span class="gen">Gen</span>
                    <span class="br">BR</span>
                </div>
            </div>
        </div>

        <div class="nav-right">
            <div class="status-pill">
                <span class="status-dot"></span>
                <span>Offline / Local</span>
            </div>
            <button id="theme-toggle-btn" class="theme-btn" title="Alternar Tema Escuro/Claro">
                <i class="fas fa-moon"></i>
            </button>
        </div>
    </nav>

    <!-- MAIN CONTAINER -->
    <main class="container">

        <!-- DISCLAIMER BANNER -->
        <div class="disclaimer-card">
            <div class="disclaimer-content">
                <i class="fas fa-shield-halved disclaimer-icon"></i>
                <div>
                    <strong>Aviso Legal & LGPD:</strong> Todos os dados gerados são <strong>100% fictícios</strong> com algoritmos oficiais para testes de software.
                </div>
            </div>
            <label class="consent-label">
                <input type="checkbox" id="consent-checkbox" class="consent-checkbox">
                <span>Ciente para testes</span>
            </label>
        </div>

        <!-- CONTROLS & FILTER HERO CARD -->
        <section class="controls-card">
            <div class="controls-grid">
                <div class="control-group">
                    <label class="control-label"><i class="fas fa-venus-mars"></i> Gênero</label>
                    <select id="gender-select" class="select-input">
                        <option value="any">Qualquer Gênero</option>
                        <option value="male">Masculino</option>
                        <option value="female">Feminino</option>
                    </select>
                </div>

                <div class="control-group">
                    <label class="control-label"><i class="fas fa-location-dot"></i> Estado (UF)</label>
                    <select id="uf-select" class="select-input">
                        <option value="">Qualquer Estado</option>
                    </select>
                </div>

                <div class="control-group">
                    <label class="control-label"><i class="fas fa-cake-candles"></i> Faixa Etária</label>
                    <select id="age-select" class="select-input">
                        <option value="18-80" selected>Qualquer Idade (18-80)</option>
                        <option value="18-30">Jovem (18 a 30 anos)</option>
                        <option value="31-45">Adulto (31 a 45 anos)</option>
                        <option value="46-60">Maduro (46 a 60 anos)</option>
                        <option value="61-80">Idoso (61 a 80 anos)</option>
                    </select>
                </div>

                <div class="control-group">
                    <label class="control-label"><i class="fas fa-building"></i> Pessoa Jurídica</label>
                    <label class="toggle-switch-wrapper">
                        <span class="toggle-switch-label">Incluir Empresa</span>
                        <input type="checkbox" id="pj-checkbox" class="toggle-checkbox" checked>
                    </label>
                </div>
            </div>

            <div class="actions-row">
                <div class="actions-primary">
                    <button id="generate-btn" class="btn btn-generate" disabled>
                        <i class="fas fa-bolt"></i>
                        <span>Gerar Dados Fictícios</span>
                    </button>
                    <button id="copy-all-btn" class="btn btn-secondary" style="display:none;">
                        <i class="fas fa-copy"></i>
                        <span>Copiar Tudo</span>
                    </button>
                    <button id="export-json-btn" class="btn btn-json" style="display:none;">
                        <i class="fas fa-file-code"></i>
                        <span>JSON</span>
                    </button>
                    <button id="export-csv-btn" class="btn btn-csv" style="display:none;">
                        <i class="fas fa-file-csv"></i>
                        <span>CSV</span>
                    </button>
                </div>

                <button id="history-btn" class="btn btn-secondary" style="display:none;">
                    <i class="fas fa-clock-rotate-left"></i>
                    <span>Histórico (<span id="history-count">0</span>)</span>
                </button>
            </div>
        </section>

        <!-- HISTORY PANEL -->
        <section id="history-panel" class="history-panel">
            <div class="history-header">
                <div style="font-weight: 700; font-size: 14px;"><i class="fas fa-history"></i> Histórico de Registros Gerados</div>
                <button id="clear-history-btn" class="btn btn-secondary" style="height: 32px; padding: 0 10px; font-size: 12px;">
                    <i class="fas fa-trash-can"></i> Limpar Histórico
                </button>
            </div>
            <div id="history-list" class="history-list"></div>
        </section>

        <!-- PLACEHOLDER (EMPTY STATE) -->
        <div id="placeholder" class="empty-state">
            <div class="empty-icon">
                <i class="fas fa-wand-magic-sparkles"></i>
            </div>
            <div class="empty-title">Pronto para gerar dados de teste</div>
            <div class="empty-desc">Marque a caixa de ciência acima e clique em <strong>Gerar Dados Fictícios</strong> para preencher cadastros completos instantaneamente.</div>
        </div>

        <!-- OUTPUT GRID (PERFECT SYMMETRICAL 2x3 LAYOUT) -->
        <div id="data-output" class="output-grid" style="display:none;"></div>

    </main>

    <!-- FOOTER CLEAN 4U.IA.BR -->
    <footer class="footer-clean">
        <div class="footer-brand">
            <i class="fas fa-fingerprint"></i> <span>DataGen BR — 4U.IA.BR</span>
        </div>
        <div class="footer-links">
            <a href="privacidade.php">Privacidade</a>
            <span class="sep">•</span>
            <a href="termos.php">Termos de Uso</a>
            <span class="sep">•</span>
            <a href="suporte.php">Suporte & FAQ</a>
        </div>
        <div class="footer-copyright">
            &copy; <span id="year"><?php echo date('Y'); ?></span> 4U.IA.BR — Gerador de Dados Fictícios para Desenvolvimento & Testes de Software. Retenção zero.
        </div>
    </footer>

    <!-- TOAST CONTAINER -->
    <div id="toast-container" class="toast-container"></div>

    <script>
class DataGenerator {
            constructor() {
                this.ufs = ["AC", "AL", "AP", "AM", "BA", "CE", "DF", "ES", "GO", "MA", "MT", "MS", "MG", "PA", "PB", "PR", "PE", "PI", "RJ", "RN", "RS", "RO", "RR", "SC", "SP", "SE", "TO"];
                
                this.ufToDddMap = {
                    "SP": ["11", "12", "13", "14", "15", "16", "17", "18", "19"],
                    "RJ": ["21", "22", "24"], "MG": ["31", "32", "33", "34", "35", "37", "38"],
                    "BA": ["71", "73", "74", "75", "77"], "PR": ["41", "42", "43", "44", "45", "46"],
                    "RS": ["51", "53", "54", "55"], "SC": ["47", "48", "49"],
                    "PE": ["81", "87"], "CE": ["85", "88"], "DF": ["61"],
                    "ES": ["27", "28"], "GO": ["62", "64"], "MA": ["98", "99"],
                    "MT": ["65", "66"], "MS": ["67"], "PA": ["91", "93", "94"],
                    "PB": ["83"], "PI": ["86", "89"], "RN": ["84"],
                    "RO": ["69"], "RR": ["95"], "SE": ["79"], "TO": ["63"],
                    "AM": ["92", "97"], "AP": ["96"], "AC": ["68"], "AL": ["82"]
                };

                this.firstNamesMale = ["Miguel", "Arthur", "Gael", "Heitor", "Theo", "Davi", "Gabriel", "Bernardo", "Samuel", "João", "Pedro", "Lucas", "Matheus", "Rafael", "Enzo", "Guilherme", "Nicolas", "Lorenzo", "Gustavo", "Felipe", "Daniel", "Benjamin", "Eduardo", "Joaquim", "Leonardo", "Henrique", "Caio", "Vitor", "Bruno", "André"];

                this.firstNamesFemale = ["Helena", "Alice", "Laura", "Maria", "Sophia", "Manuela", "Maitê", "Liz", "Cecília", "Isabella", "Luísa", "Eloá", "Heloísa", "Júlia", "Antonella", "Valentina", "Maya", "Aurora", "Lívia", "Clara", "Beatriz", "Mariana", "Yasmin", "Gabriela", "Alícia", "Carolina", "Fernanda", "Larissa", "Camila", "Amanda"];

                this.lastNames = ["Silva", "Santos", "Oliveira", "Souza", "Rodrigues", "Ferreira", "Alves", "Pereira", "Lima", "Gomes", "Costa", "Ribeiro", "Martins", "Carvalho", "Almeida", "Lopes", "Dias", "Miranda", "Nunes", "Moreira", "Barros", "Freitas", "Barbosa", "Pinto", "Moura", "Cavalcanti", "Cardoso", "Teixeira", "Araújo", "Fernandes"];

                this.streetTypes = ["Rua", "Avenida", "Travessa", "Praça", "Alameda", "Estrada"];
                this.neighborhoods = ["Centro", "Vila Nova", "Jardim América", "Boa Vista", "Santa Mônica", "Copacabana", "Ipanema", "Liberdade", "Bela Vista", "Consolação", "Pinheiros", "Botafogo", "Savassi", "Pampulha", "Aldeota"];

                this.citiesByUf = {
                    "AC": ["Rio Branco"], "AL": ["Maceió"], "AP": ["Macapá"], "AM": ["Manaus"],
                    "BA": ["Salvador", "Feira de Santana"], "CE": ["Fortaleza"], "DF": ["Brasília"],
                    "ES": ["Vitória", "Vila Velha"], "GO": ["Goiânia"], "MA": ["São Luís"],
                    "MT": ["Cuiabá"], "MS": ["Campo Grande"], "MG": ["Belo Horizonte", "Uberlândia"],
                    "PA": ["Belém"], "PB": ["João Pessoa"], "PR": ["Curitiba", "Londrina"],
                    "PE": ["Recife", "Olinda"], "PI": ["Teresina"], "RJ": ["Rio de Janeiro", "Niterói"],
                    "RN": ["Natal"], "RS": ["Porto Alegre"], "RO": ["Porto Velho"], "RR": ["Boa Vista"],
                    "SC": ["Florianópolis", "Joinville"], "SP": ["São Paulo", "Campinas"],
                    "SE": ["Aracaju"], "TO": ["Palmas"]
                };

                this.banks = [
                    { nome: "Banco do Brasil", numero: "001" }, { nome: "Caixa Econômica", numero: "104" },
                    { nome: "Bradesco", numero: "237" }, { nome: "Itaú Unibanco", numero: "341" },
                    { nome: "Santander", numero: "033" }, { nome: "Nubank", numero: "260" },
                    { nome: "Inter", numero: "077" }, { nome: "C6 Bank", numero: "336" }
                ];

                this.cardFlags = ["Visa", "Mastercard", "Elo", "American Express", "Hipercard"];
                this.carBrands = {
                    "Fiat": ["Mobi", "Argo", "Cronos", "Pulse", "Strada"],
                    "Volkswagen": ["Polo", "Virtus", "T-Cross", "Nivus"],
                    "Chevrolet": ["Onix", "Tracker", "Montana", "S10"],
                    "Toyota": ["Corolla", "Hilux", "Yaris", "SW4"],
                    "Hyundai": ["HB20", "Creta", "Tucson"],
                    "Honda": ["City", "HR-V", "Civic"]
                };

                this.professions = ["Desenvolvedor(a) de Software", "Engenheiro(a) Civil", "Médico(a)", "Enfermeiro(a)", "Professor(a)", "Advogado(a)", "Contador(a)", "Designer Gráfico", "Analista de Marketing", "Gerente de Projetos", "Administrador(a)", "Arquiteto(a)"];
                this.bloodTypes = ["A+", "A-", "B+", "B-", "AB+", "AB-", "O+", "O-"];
                this.orgaosEmissores = ["SSP", "DETRAN", "IFP", "PC", "PM"];
            }

            random(min, max) {
                return Math.floor(Math.random() * (max - min + 1)) + min;
            }

            randomElement(arr) {
                return arr[Math.floor(Math.random() * arr.length)];
            }

            randomDigits(n) {
                return Array.from({ length: n }, () => this.random(0, 9)).join('');
            }

            formatCurrency(value) {
                return value.toLocaleString('pt-BR', { style: 'currency', currency: 'BRL' });
            }

            calculateCheckDigit(digits, weights) {
                let sum = 0;
                for (let i = 0; i < digits.length && i < weights.length; i++) {
                    sum += parseInt(digits[i]) * weights[i];
                }
                const remainder = sum % 11;
                return remainder < 2 ? 0 : 11 - remainder;
            }

            generateCPF() {
                const base = this.randomDigits(9);
                const d1 = this.calculateCheckDigit(base, [10, 9, 8, 7, 6, 5, 4, 3, 2]);
                const d2 = this.calculateCheckDigit(base + d1, [11, 10, 9, 8, 7, 6, 5, 4, 3, 2]);
                const cpf = `${base}${d1}${d2}`;
                return cpf.replace(/(\d{3})(\d{3})(\d{3})(\d{2})/, '$1.$2.$3-$4');
            }

            generateCNPJ() {
                const base = this.randomDigits(8) + '0001';
                const d1 = this.calculateCheckDigit(base, [5, 4, 3, 2, 9, 8, 7, 6, 5, 4, 3, 2]);
                const d2 = this.calculateCheckDigit(base + d1, [6, 5, 4, 3, 2, 9, 8, 7, 6, 5, 4, 3, 2]);
                const cnpj = `${base}${d1}${d2}`;
                return cnpj.replace(/(\d{2})(\d{3})(\d{3})(\d{4})(\d{2})/, '$1.$2.$3/$4-$5');
            }

            generatePIS() {
                const base = this.randomDigits(10);
                const d = this.calculateCheckDigit(base, [3, 2, 9, 8, 7, 6, 5, 4, 3, 2]);
                const pis = `${base}${d}`;
                return pis.replace(/(\d{3})(\d{5})(\d{2})(\d{1})/, '$1.$2.$3-$4');
            }

            generateRenavam() {
                let base = this.randomDigits(10).padStart(10, '0');
                const weights = [3, 2, 9, 8, 7, 6, 5, 4, 3, 2];
                let sum = 0;
                for (let i = 0; i < 10; i++) {
                    sum += parseInt(base[i]) * weights[i];
                }
                const remainder = sum % 11;
                const d = remainder < 2 ? 0 : 11 - remainder;
                return `${base}${d}`;
            }

            generateCreditCard(flag) {
                const prefixes = {
                    'Visa': '4',
                    'Mastercard': this.randomElement(['51', '52', '53', '54', '55']),
                    'Elo': this.randomElement(['636368', '438935', '504175']),
                    'American Express': this.randomElement(['34', '37']),
                    'Hipercard': '606282'
                };
                let number = prefixes[flag] || '4';
                const targetLength = flag === 'American Express' ? 15 : 16;
                while (number.length < targetLength - 1) {
                    number += this.random(0, 9);
                }
                let sum = 0;
                let alternate = true;
                for (let i = number.length - 1; i >= 0; i--) {
                    let digit = parseInt(number[i]);
                    if (alternate) { digit *= 2; if (digit > 9) digit -= 9; }
                    sum += digit;
                    alternate = !alternate;
                }
                const checkDigit = (10 - (sum % 10)) % 10;
                number += checkDigit;
                return number.match(/.{1,4}/g).join(' ');
            }

            generateDate(minYearsAgo, maxYearsAgo) {
                const year = new Date().getFullYear() - this.random(minYearsAgo, maxYearsAgo);
                const month = this.random(1, 12);
                const day = this.random(1, 28);
                return `${String(day).padStart(2, '0')}/${String(month).padStart(2, '0')}/${year}`;
            }

            generateFutureDate(minYears, maxYears) {
                const year = new Date().getFullYear() + this.random(minYears, maxYears);
                const month = this.random(1, 12);
                return `${String(month).padStart(2, '0')}/${String(year).slice(-2)}`;
            }

            generatePlaca() {
                const letters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
                const l = () => this.randomElement(letters.split(''));
                const n = () => this.random(0, 9);
                return `${l()}${l()}${l()}${n()}${l()}${n()}${n()}`;
            }

            generateChassi() {
                const chars = 'ABCDEFGHJKLMNPRSTUVWXYZ0123456789';
                return Array.from({ length: 17 }, () => this.randomElement(chars.split(''))).join('');
            }

            generateSUSCard() {
                return this.randomElement(['1', '2', '7', '8', '9']) + this.randomDigits(14);
            }

            
            
            generatePassport() {
                const letters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
                const prefix = this.randomElement(letters) + this.randomElement(letters);
                const number = this.randomDigits(6);
                return `${prefix}${number}`;
            }

            generateCertidao(uf = 'SP') {
                const cartorio = this.randomDigits(6);
                const ano = this.random(2000, new Date().getFullYear());
                const livro = this.randomDigits(5);
                const folha = this.randomDigits(3);
                const termo = this.randomDigits(7);
                const dv = this.randomDigits(2);
                return `${cartorio} 01 55 ${ano} 1 ${livro} ${folha} ${termo}-${dv}`;
            }
generateCTPS(uf = 'SP') {
                const number = this.randomDigits(7);
                const series = `${this.randomDigits(3).padStart(3, '0')}-${uf}`;
                return { number, series };
            }
generate(options = {}) {
                const { gender = 'any', uf = '', ageRange = '18-80', includePJ = false } = options;
                const selectedUf = uf || this.randomElement(this.ufs);
                const city = this.randomElement(this.citiesByUf[selectedUf] || ['Cidade']);
                const ddds = this.ufToDddMap[selectedUf] || ['11'];
                const [minAge, maxAge] = ageRange.split('-').map(Number);

                let firstNames = gender === 'male' ? this.firstNamesMale :
                                 gender === 'female' ? this.firstNamesFemale :
                                 [...this.firstNamesMale, ...this.firstNamesFemale];
                
                const firstName = this.randomElement(firstNames);
                const lastName = `${this.randomElement(this.lastNames)} ${this.randomElement(this.lastNames)}`;
                const fullName = `${firstName} ${lastName}`;
                const cpf = this.generateCPF();
                const birthDate = this.generateDate(minAge, maxAge);
                const phone = `(${this.randomElement(ddds)}) 9${this.randomDigits(4)}-${this.randomDigits(4)}`;
                const emailDomain = this.randomElement(['gmail.com', 'outlook.com', 'yahoo.com.br', 'hotmail.com']);
                const email = `${firstName.toLowerCase().normalize('NFD').replace(/[\u0300-\u036f]/g, '')}.${lastName.split(' ')[0].toLowerCase().normalize('NFD').replace(/[\u0300-\u036f]/g, '')}@${emailDomain}`;

                const motherFirstName = this.randomElement(this.firstNamesFemale);
                const motherLastName = `${this.randomElement(this.lastNames)} ${this.randomElement(this.lastNames)}`;
                const motherName = `${motherFirstName} ${motherLastName}`;

                const fatherFirstName = this.randomElement(this.firstNamesMale);
                const fatherLastName = `${this.randomElement(this.lastNames)} ${this.randomElement(this.lastNames)}`;
                const fatherName = `${fatherFirstName} ${fatherLastName}`;

                const estadoCivil = this.randomElement(['Solteiro(a)', 'Casado(a)', 'Divorciado(a)', 'União Estável', 'Viúvo(a)']);

                const street = `${this.randomElement(this.streetTypes)} ${this.randomElement(this.lastNames)}`;
                const number = this.random(1, 2000);
                const complement = Math.random() > 0.6 ? `, Apto ${this.random(1, 500)}` : '';
                const neighborhood = this.randomElement(this.neighborhoods);
                const cep = `${this.randomDigits(5)}-${this.randomDigits(3)}`;
                const address = `${street}, ${number}${complement}, ${neighborhood}, ${city}-${selectedUf}, CEP: ${cep}`;

                const rgNumber = `${this.randomDigits(2)}.${this.randomDigits(3)}.${this.randomDigits(3)}-${this.randomDigits(1)}`;
                const rg = `${rgNumber} ${this.randomElement(this.orgaosEmissores)}/${selectedUf}`;
                const passport = this.generatePassport();
                const passportExpiry = this.generateFutureDate(5, 10);
                const certidaoMatricula = this.generateCertidao(selectedUf);
                const pis = this.generatePIS();
                const titulo = `${this.randomDigits(4)} ${this.randomDigits(4)} ${this.randomDigits(4)}`;
                const zona = String(this.random(1, 400)).padStart(3, '0');
                const secao = String(this.random(1, 2000)).padStart(4, '0');
                const cnh = `${this.randomDigits(11)} - ${this.randomElement(['A', 'B', 'AB', 'C', 'D', 'E'])}`;
                const sus = this.generateSUSCard();

                const bank = this.randomElement(this.banks);
                const agencia = this.randomDigits(4);
                const conta = `${this.randomDigits(6)}-${this.randomDigits(1)}`;
                const tipoConta = this.randomElement(['Corrente', 'Poupança', 'Salário']);
                const pixKey = Math.random() > 0.5 ? email : cpf;

                const cardFlag = this.randomElement(this.cardFlags);
                const cardNumber = this.generateCreditCard(cardFlag);
                const cardExpiry = this.generateFutureDate(2, 6);
                const cardCvv = cardFlag === 'American Express' ? this.randomDigits(4) : this.randomDigits(3);

                const carBrand = this.randomElement(Object.keys(this.carBrands));
                const carModel = this.randomElement(this.carBrands[carBrand]);
                const fabYear = this.random(2015, new Date().getFullYear());
                const modelYear = this.random(fabYear, fabYear + 1);

                const ctpsNumber = this.randomDigits(7);
                const ctpsSerie = `${this.randomDigits(3).padStart(3, '0')}-${selectedUf}`;
                const profList = this.profissoes || this.professions || ['Desenvolvedor(a) de Software', 'Administrador(a)', 'Engenheiro(a) Civil', 'Médico(a)', 'Advogado(a)', 'Contador(a)', 'Designer UI/UX', 'Analista de Sistemas', 'Arquiteto(a)', 'Professor(a)', 'Gerente de Projetos', 'Consultor(a) Financeiro', 'Farmacêutico(a)', 'Enfermeiro(a)', 'Psicólogo(a)'];
                const profession = this.randomElement(profList);
                const salary = this.formatCurrency(this.random(2200, 38500));
                const bloodTypesList = this.bloodTypes || ['A+', 'A-', 'B+', 'B-', 'AB+', 'AB-', 'O+', 'O-'];
                const bloodType = this.randomElement(bloodTypesList);
                const signsList = ['Áries ♈', 'Touro ♉', 'Gêmeos ♊', 'Câncer ♋', 'Leão ♌', 'Virgem ♍', 'Libra ♎', 'Escorpião ♏', 'Sagitário ♐', 'Capricórnio ♑', 'Aquário ♒', 'Peixes ♓'];
                const sign = this.randomElement(signsList);
                const birthYear = parseInt(birthDate.split('/')[2]) || 1990;
                const age = new Date().getFullYear() - birthYear;
                const genderDisplay = gender === 'male' ? 'Masculino' : (gender === 'female' ? 'Feminino' : this.randomElement(['Masculino', 'Feminino']));

                const result = {
                    dadosPessoais: {
                        'Nome Completo': fullName,
                        'Data de Nascimento': birthDate,
                        'Idade': `${age} anos`,
                        'Gênero': genderDisplay,
                        'Estado Civil': estadoCivil,
                        'Nacionalidade': 'Brasileira',
                        'Nome da Mãe': motherName,
                        'Nome do Pai': fatherName,
                        'Signo': sign,
                        'Telefone Celular': phone,
                        'E-mail': email,
                        'Endereço Completo': address,
                        'CEP': cep
                    },
                    ocupacaoCTPS: {
                        'Profissão / Cargo': profession,
                        'Renda Mensal': salary,
                        'Número CTPS': ctpsNumber,
                        'Série CTPS': ctpsSerie,
                        'PIS / PASEP': pis,
                        'Tipo Sanguíneo': bloodType,
                        'Regime de Trabalho': 'CLT (Tempo Integral)'
                    },
                    documentos: {
                        'CPF': cpf,
                        'RG': rg,
                        'Passaporte': passport,
                        'Validade Passaporte': passportExpiry,
                        'CNH': cnh,
                        'PIS/PASEP': pis,
                        'Título de Eleitor': `${titulo} / Zona ${zona} / Seção ${secao}`,
                        'Certidão (Matrícula)': certidaoMatricula,
                        'Cartão SUS': sus
                    },
                    dadosBancarios: {
                        'Banco': `${bank.nome || bank.name || bank} (${bank.numero || bank.code || '001'})`,
                        'Agência': agencia,
                        'Conta': conta,
                        'Tipo de Conta': tipoConta,
                        'Chave PIX': pixKey
                    },
                    cartaoCredito: {
                        'Bandeira': cardFlag,
                        'Número': cardNumber,
                        'Validade': cardExpiry,
                        'CVV': cardCvv,
                        'Nome no Cartão': fullName.toUpperCase()
                    },
                    veiculo: {
                        'Marca': carBrand,
                        'Modelo': carModel,
                        'Ano': `${fabYear}/${modelYear}`,
                        'Placa (Mercosul)': this.generatePlaca ? this.generatePlaca() : 'ABC1D23',
                        'RENAVAM': this.generateRenavam ? this.generateRenavam() : this.randomDigits(11),
                        'Chassi': this.generateChassi ? this.generateChassi() : this.randomDigits(17)
                    }
                };

                if (includePJ) {
                    const razaoSocial = `${this.randomElement(this.lastNames)} ${this.randomElement(['Tecnologia', 'Serviços', 'Comércio', 'Consultoria', 'Logística'])} ${this.randomElement(['LTDA', 'ME', 'S/A'])}`;
                    const nomeFantasia = `${firstName} ${this.randomElement(['Tech', 'Solutions', 'Group', 'Digital', 'Brasil'])}`;
                    result.pessoaJuridica = {
                        'Razão Social': razaoSocial,
                        'Nome Fantasia': nomeFantasia,
                        'CNPJ': this.generateCNPJ(),
                        'Inscrição Estadual': this.randomDigits(12),
                        'Inscrição Municipal': this.randomDigits(9),
                        'Telefone Comercial': `(${this.randomElement(ddds)}) ${this.random(2000, 4999)}-${this.randomDigits(4)}`,
                        'E-mail Corporativo': `contato@${nomeFantasia.toLowerCase().replace(/[^a-z0-9]/g, '')}.com.br`,
                        'Representante Legal': `${fullName} (CPF: ${cpf})`
                    };
                }
                return result;
            }
        }

        // ========================================
        // MODERN SAAS TECH APP CONTROLLER
        // ========================================
        class App {
            constructor() {
                this.generator = new DataGenerator();
                this.generatedData = {};
                this.history = JSON.parse(localStorage.getItem('datagenHistory') || '[]');
                this.init();
            }

            init() {
                this.initTheme();
                this.cacheElements();
                this.bindEvents();
                this.populateUFs();
                this.updateYear();
                this.updateHistoryCount();
            }

            initTheme() {
                const savedTheme = localStorage.getItem('datagen_theme') || 'dark';
                document.documentElement.setAttribute('data-theme', savedTheme);
                this.updateThemeIcon(savedTheme);
            }

            toggleTheme() {
                const current = document.documentElement.getAttribute('data-theme') || 'dark';
                const next = current === 'dark' ? 'light' : 'dark';
                document.documentElement.setAttribute('data-theme', next);
                localStorage.setItem('datagen_theme', next);
                this.updateThemeIcon(next);
                this.showToast(`Modo ${next === 'dark' ? 'Escuro' : 'Claro'} ativado`, 'info');
            }

            updateThemeIcon(theme) {
                const btn = document.getElementById('theme-toggle-btn');
                if (btn) {
                    btn.innerHTML = theme === 'dark' ? '<i class="fas fa-sun"></i>' : '<i class="fas fa-moon"></i>';
                }
            }

            cacheElements() {
                this.consentCheckbox = document.getElementById('consent-checkbox');
                this.generateBtn = document.getElementById('generate-btn');
                this.copyAllBtn = document.getElementById('copy-all-btn');
                this.exportJsonBtn = document.getElementById('export-json-btn');
                this.exportCsvBtn = document.getElementById('export-csv-btn');
                this.historyBtn = document.getElementById('history-btn');
                this.historyCount = document.getElementById('history-count');
                this.genderSelect = document.getElementById('gender-select');
                this.ufSelect = document.getElementById('uf-select');
                this.ageSelect = document.getElementById('age-select');
                this.pjCheckbox = document.getElementById('pj-checkbox');
                this.dataOutput = document.getElementById('data-output');
                this.placeholder = document.getElementById('placeholder');
                this.historyPanel = document.getElementById('history-panel');
                this.historyList = document.getElementById('history-list');
                this.clearHistoryBtn = document.getElementById('clear-history-btn');
                this.themeToggleBtn = document.getElementById('theme-toggle-btn');
            }

            bindEvents() {
                this.consentCheckbox.addEventListener('change', () => this.toggleConsent());
                this.generateBtn.addEventListener('click', () => this.generate());
                this.copyAllBtn.addEventListener('click', () => this.copyAll());
                this.exportJsonBtn.addEventListener('click', () => this.exportJSON());
                this.exportCsvBtn.addEventListener('click', () => this.exportCSV());
                this.historyBtn.addEventListener('click', () => this.toggleHistory());
                this.clearHistoryBtn.addEventListener('click', () => this.clearHistory());
                this.themeToggleBtn.addEventListener('click', () => this.toggleTheme());
            }

            populateUFs() {
                this.generator.ufs.forEach(uf => {
                    const option = document.createElement('option');
                    option.value = uf;
                    option.textContent = uf;
                    this.ufSelect.appendChild(option);
                });
            }

            updateYear() {
                const yearEl = document.getElementById('year');
                const y = new Date().getFullYear(); if (yearEl) yearEl.textContent = y; document.querySelectorAll('.current-year').forEach(el => el.textContent = y);
            }

            updateHistoryCount() {
                if (this.historyCount) {
                    this.historyCount.textContent = this.history.length;
                }
            }

            toggleConsent() {
                const isChecked = this.consentCheckbox.checked;
                this.generateBtn.disabled = !isChecked;
                if (isChecked && this.placeholder.style.display !== 'none') {
                    this.placeholder.querySelector('.empty-desc').innerHTML = 'Tudo pronto! Clique em <strong>Gerar Dados Fictícios</strong>.';
                }
            }

            generate() {
                if (!this.consentCheckbox.checked) return;

                this.generateBtn.disabled = true;
                this.generateBtn.innerHTML = '<i class="fas fa-spinner fa-spin"></i><span>Gerando...</span>';

                setTimeout(() => {
                    const options = {
                        gender: this.genderSelect.value,
                        uf: this.ufSelect.value,
                        ageRange: this.ageSelect.value,
                        includePJ: this.pjCheckbox.checked
                    };

                    this.generatedData = this.generator.generate(options);
                    this.renderData();
                    this.saveToHistory();
                    this.showButtons();

                    this.generateBtn.innerHTML = '<i class="fas fa-arrows-rotate"></i><span>Gerar Novamente</span>';
                    this.generateBtn.disabled = false;
                    this.showToast('Dados cadastrais gerados com sucesso!', 'success');
                }, 200);
            }

            renderData() {
                this.placeholder.style.display = 'none';
                this.dataOutput.style.display = 'grid';
                this.dataOutput.innerHTML = '';

                // Column 1: Dados Pessoais (Topo) + Ocupação & CTPS (Base)
                const col1 = document.createElement('div');
                col1.className = 'grid-column fade-in';
                col1.appendChild(this.createPersonalCard(this.generatedData.dadosPessoais));
                if (this.generatedData.ocupacaoCTPS) {
                    col1.appendChild(this.createWorkCTPSCard(this.generatedData.ocupacaoCTPS));
                }

                // Column 2: Documentos Oficiais (Topo) + Dados Bancários (Base)
                const col2 = document.createElement('div');
                col2.className = 'grid-column fade-in';
                col2.style.animationDelay = '0.08s';
                col2.appendChild(this.createDocumentsCard(this.generatedData.documentos, this.generatedData.dadosPessoais));
                col2.appendChild(this.createBankingCard(this.generatedData.dadosBancarios));

                // Column 3: Cartão de Crédito (Topo) + Veículo (Base) + PJ (se houver)
                const col3 = document.createElement('div');
                col3.className = 'grid-column fade-in';
                col3.style.animationDelay = '0.16s';
                col3.appendChild(this.createCreditCardSection(this.generatedData.cartaoCredito, this.generatedData.dadosPessoais));
                col3.appendChild(this.createVehicleCard(this.generatedData.veiculo));

                if (this.generatedData.pessoaJuridica) {
                    col3.appendChild(this.createCompanyCard(this.generatedData.pessoaJuridica));
                }

                this.dataOutput.appendChild(col1);
                this.dataOutput.appendChild(col2);
                this.dataOutput.appendChild(col3);
            }

            // 1. DADOS PESSOAIS + PROFILE MOCKUP
            createPersonalCard(data) {
                const card = document.createElement('div');
                card.className = 'data-card';

                const fullName = data['Nome Completo'] || 'Nome Fictício';
                const initials = fullName.split(' ').map(n => n[0]).slice(0, 2).join('').toUpperCase();
                const gender = data['Gênero'] || 'Pessoa';
                const age = data['Idade'] || '';
                const sign = data['Signo'] || '';
                const cityState = (data['Endereço Completo'] && data['Endereço Completo'].includes(',')) ? 
                    data['Endereço Completo'].split(',').slice(-2).join(', ').trim() : 'Brasil';

                let rowsHtml = '';
                for (const [label, val] of Object.entries(data)) {
                    rowsHtml += `
                        <div class="data-item-row" onclick="window.app.copyValue('${String(val).replace(/'/g, "\'")}', '${label}')" title="Clique para copiar">
                            <span class="data-item-label">${label}</span>
                            <span class="data-item-value">${val}</span>
                            <i class="fas fa-copy data-item-copy-icon"></i>
                        </div>
                    `;
                }

                card.innerHTML = `
                    <div class="card-header">
                        <div class="card-title-group">
                            <div class="category-icon icon-personal">
                                <i class="fas fa-user"></i>
                            </div>
                            <span class="card-title">Dados Pessoais & Endereço</span>
                        </div>
                        <button class="copy-section-btn" onclick="window.app.copySection('dadosPessoais')" title="Copiar seção">
                            <i class="fas fa-copy"></i> Seção
                        </button>
                    </div>

                    <!-- Visual Profile Mockup -->
                    <div class="person-profile-mockup">
                        <div class="person-profile-header">
                            <div class="person-avatar-circle">${initials}</div>
                            <div style="overflow: hidden; flex: 1;">
                                <div class="person-profile-name">${fullName}</div>
                                <div class="person-profile-location">
                                    <i class="fas fa-location-dot" style="color: #38bdf8;"></i> ${cityState}
                                </div>
                            </div>
                        </div>
                        <div class="person-tags-row">
                            <span class="person-tag-pill"><i class="fas fa-venus-mars"></i> ${gender}</span>
                            ${age ? `<span class="person-tag-pill"><i class="fas fa-cake-candles"></i> ${age}</span>` : ''}
                            ${sign ? `<span class="person-tag-pill"><i class="fas fa-star"></i> ${sign}</span>` : ''}
                            <span class="person-tag-pill" style="color: #10b981;"><i class="fas fa-circle-check"></i> Cadastro Ativo</span>
                        </div>
                    </div>

                    <div class="data-rows-list">
                        ${rowsHtml}
                    </div>
                `;
                return card;
            }

            // 2. OCUPAÇÃO & CTPS DIGITAL MOCKUP
            createWorkCTPSCard(data) {
                const card = document.createElement('div');
                card.className = 'data-card';

                const job = data['Profissão / Cargo'] || 'Profissional';
                const salary = data['Renda Mensal'] || 'R$ 0,00';
                const ctpsNum = data['Número CTPS'] || '0000000';
                const ctpsSerie = data['Série CTPS'] || '001-SP';

                let rowsHtml = '';
                for (const [label, val] of Object.entries(data)) {
                    rowsHtml += `
                        <div class="data-item-row" onclick="window.app.copyValue('${String(val).replace(/'/g, "\'")}', '${label}')" title="Clique para copiar">
                            <span class="data-item-label">${label}</span>
                            <span class="data-item-value">${val}</span>
                            <i class="fas fa-copy data-item-copy-icon"></i>
                        </div>
                    `;
                }

                card.innerHTML = `
                    <div class="card-header">
                        <div class="card-title-group">
                            <div class="category-icon icon-work">
                                <i class="fas fa-briefcase"></i>
                            </div>
                            <span class="card-title">Ocupação & CTPS Digital</span>
                        </div>
                        <button class="copy-section-btn" onclick="window.app.copySection('ocupacaoCTPS')" title="Copiar seção">
                            <i class="fas fa-copy"></i> Seção
                        </button>
                    </div>

                    <!-- Visual CTPS Mockup -->
                    <div class="ctps-digital-mockup">
                        <div class="ctps-top-bar">
                            <span><i class="fas fa-scale-balanced"></i> MINISTÉRIO DO TRABALHO</span>
                            <span>CTPS DIGITAL</span>
                        </div>
                        <div class="ctps-job-title">${job}</div>
                        <div class="ctps-salary-badge">${salary} / mês</div>
                        <div class="ctps-details-row">
                            <span>CTPS: <strong>${ctpsNum}</strong></span>
                            <span>SÉRIE: <strong>${ctpsSerie}</strong></span>
                            <span style="color: #6ee7b7;"><i class="fas fa-check-circle"></i> CLT ATIVA</span>
                        </div>
                    </div>

                    <div class="data-rows-list">
                        ${rowsHtml}
                    </div>
                `;
                return card;
            }

            // 3. DOCUMENTOS OFICIAIS + CNH DIGITAL MOCKUP
            createDocumentsCard(data, personalData) {
                const card = document.createElement('div');
                card.className = 'data-card';

                const cpf = data['CPF'] || '000.000.000-00';
                const rg = data['RG'] || '00.000.000-0';
                const passport = data['Passaporte'] || 'BR000000';
                const fullName = personalData ? personalData['Nome Completo'] : 'TITULAR DO DOCUMENTO';

                let rowsHtml = '';
                for (const [label, val] of Object.entries(data)) {
                    rowsHtml += `
                        <div class="data-item-row" onclick="window.app.copyValue('${String(val).replace(/'/g, "\'")}', '${label}')" title="Clique para copiar">
                            <span class="data-item-label">${label}</span>
                            <span class="data-item-value">${val}</span>
                            <i class="fas fa-copy data-item-copy-icon"></i>
                        </div>
                    `;
                }

                card.innerHTML = `
                    <div class="card-header">
                        <div class="card-title-group">
                            <div class="category-icon icon-docs">
                                <i class="fas fa-id-card"></i>
                            </div>
                            <span class="card-title">Documentos Oficiais</span>
                        </div>
                        <button class="copy-section-btn" onclick="window.app.copySection('documentos')">
                            <i class="fas fa-copy"></i> Seção
                        </button>
                    </div>

                    <!-- Visual CNH & Passaporte Mockup -->
                    <div class="cnh-digital-mockup">
                        <div class="cnh-top-bar">
                            <span><i class="fas fa-shield"></i> REPÚBLICA FEDERATIVA DO BRASIL</span>
                            <span>CNH & PASSAPORTE DIGITAL</span>
                        </div>
                        <div class="cnh-body">
                            <div class="cnh-photo-box">
                                <i class="fas fa-user-tie"></i>
                            </div>
                            <div class="cnh-info-group">
                                <div style="font-size: 9.5px; color: #a7f3d0; text-transform: uppercase;">NOME / FILIAÇÃO</div>
                                <div style="font-size: 11px; font-weight: 700; color: #fff; overflow: hidden; text-overflow: ellipsis; white-space: nowrap;">${fullName}</div>
                                <div class="cnh-cpf-highlight">${cpf}</div>
                                <div class="cnh-rg-label">RG: ${rg} &bull; PASS: <strong>${passport}</strong></div>
                            </div>
                            <div class="cnh-category-badge">CAT. B</div>
                        </div>
                    </div>

                    <div class="data-rows-list">
                        ${rowsHtml}
                    </div>
                `;
                return card;
            }

            // 4. DADOS BANCÁRIOS + FINTECH BANK MOCKUP
            createBankingCard(data) {
                const card = document.createElement('div');
                card.className = 'data-card';

                const bankName = data['Banco'] || 'Banco Digital';
                const agency = data['Agência'] || '0001';
                const account = data['Conta'] || '123456-7';
                const accountType = data['Tipo de Conta'] || 'Corrente';

                // Color Theme by Bank
                let bankBg = 'linear-gradient(135deg, #0f172a 0%, #1e293b 100%)';
                let bankBorder = 'rgba(255,255,255,0.15)';
                let bankIcon = 'fa-building-columns';

                const lowerBank = bankName.toLowerCase();
                if (lowerBank.includes('nubank')) {
                    bankBg = 'linear-gradient(135deg, #531282 0%, #820ad1 100%)';
                    bankBorder = 'rgba(192, 132, 252, 0.4)';
                    bankIcon = 'fa-n';
                } else if (lowerBank.includes('itau') || lowerBank.includes('itaú')) {
                    bankBg = 'linear-gradient(135deg, #ec7000 0%, #003882 100%)';
                    bankBorder = 'rgba(236, 112, 0, 0.4)';
                } else if (lowerBank.includes('bradesco')) {
                    bankBg = 'linear-gradient(135deg, #cc092f 0%, #80001a 100%)';
                    bankBorder = 'rgba(244, 63, 94, 0.4)';
                } else if (lowerBank.includes('brasil')) {
                    bankBg = 'linear-gradient(135deg, #003882 0%, #f7d117 100%)';
                    bankBorder = 'rgba(247, 209, 23, 0.4)';
                } else if (lowerBank.includes('caixa')) {
                    bankBg = 'linear-gradient(135deg, #005ca9 0%, #f37021 100%)';
                    bankBorder = 'rgba(0, 92, 169, 0.4)';
                } else if (lowerBank.includes('inter')) {
                    bankBg = 'linear-gradient(135deg, #ff7a00 0%, #d95d00 100%)';
                    bankBorder = 'rgba(255, 122, 0, 0.4)';
                } else if (lowerBank.includes('santander')) {
                    bankBg = 'linear-gradient(135deg, #ec0000 0%, #990000 100%)';
                    bankBorder = 'rgba(236, 0, 0, 0.4)';
                } else {
                    bankBg = 'linear-gradient(135deg, #0891b2 0%, #0e7490 100%)';
                    bankBorder = 'rgba(34, 211, 238, 0.35)';
                }

                let rowsHtml = '';
                for (const [label, val] of Object.entries(data)) {
                    rowsHtml += `
                        <div class="data-item-row" onclick="window.app.copyValue('${String(val).replace(/'/g, "\'")}', '${label}')" title="Clique para copiar">
                            <span class="data-item-label">${label}</span>
                            <span class="data-item-value">${val}</span>
                            <i class="fas fa-copy data-item-copy-icon"></i>
                        </div>
                    `;
                }

                card.innerHTML = `
                    <div class="card-header">
                        <div class="card-title-group">
                            <div class="category-icon icon-bank">
                                <i class="fas fa-building-columns"></i>
                            </div>
                            <span class="card-title">Dados Bancários</span>
                        </div>
                        <button class="copy-section-btn" onclick="window.app.copySection('dadosBancarios')">
                            <i class="fas fa-copy"></i> Seção
                        </button>
                    </div>

                    <!-- Visual Bank Mockup -->
                    <div class="bank-account-mockup" style="background: ${bankBg}; border: 1px solid ${bankBorder};">
                        <div class="bank-mock-top">
                            <div class="bank-name-badge">
                                <i class="fas ${bankIcon}"></i> ${bankName}
                            </div>
                            <span class="bank-account-type">${accountType}</span>
                        </div>
                        <div class="bank-numbers-row">
                            <div class="bank-field-col">
                                <span class="bank-field-label">Agência</span>
                                <span class="bank-field-val">${agency}</span>
                            </div>
                            <div class="bank-field-col">
                                <span class="bank-field-label">Conta com Dígito</span>
                                <span class="bank-field-val">${account}</span>
                            </div>
                            <div class="bank-field-col" style="margin-left: auto; text-align: right;">
                                <span class="bank-field-label">Pix Habilitado</span>
                                <span style="font-size: 11px; font-weight: 700; color: #a7f3d0;"><i class="fas fa-bolt"></i> Ativo</span>
                            </div>
                        </div>
                    </div>

                    <div class="data-rows-list">
                        ${rowsHtml}
                    </div>
                `;
                return card;
            }

            // 5. CARTÃO DE CRÉDITO + CREDIT CARD MOCKUP
            createCreditCardSection(cardData, personalData) {
                const card = document.createElement('div');
                card.className = 'data-card';

                const cardNumber = cardData['Número do Cartão'] || '4000 1234 5678 9010';
                const cardHolder = personalData ? personalData['Nome Completo'] : 'NOME DO TITULAR';
                const cardExpiry = cardData['Validade'] || '12/29';
                const cardCvv = cardData['CVV'] || '123';
                const cardBrand = cardData['Bandeira'] || 'Mastercard';

                let rowsHtml = '';
                for (const [label, val] of Object.entries(cardData)) {
                    rowsHtml += `
                        <div class="data-item-row" onclick="window.app.copyValue('${String(val).replace(/'/g, "\'")}', '${label}')" title="Clique para copiar">
                            <span class="data-item-label">${label}</span>
                            <span class="data-item-value">${val}</span>
                            <i class="fas fa-copy data-item-copy-icon"></i>
                        </div>
                    `;
                }

                card.innerHTML = `
                    <div class="card-header">
                        <div class="card-title-group">
                            <div class="category-icon icon-card">
                                <i class="fas fa-credit-card"></i>
                            </div>
                            <span class="card-title">Cartão de Crédito</span>
                        </div>
                        <button class="copy-section-btn" onclick="window.app.copySection('cartaoCredito')">
                            <i class="fas fa-copy"></i> Seção
                        </button>
                    </div>

                    <!-- Visual Credit Card Mockup -->
                    <div class="credit-card-mockup">
                        <div class="card-mock-top">
                            <div class="card-chip"></div>
                            <div class="card-brand-logo">${cardBrand}</div>
                        </div>
                        <div class="card-mock-number">${cardNumber}</div>
                        <div class="card-mock-bottom">
                            <div class="card-holder-name">${cardHolder}</div>
                            <div class="card-expiry-info">
                                <span>EXP: <strong>${cardExpiry}</strong></span>
                                <span>CVV: <strong>${cardCvv}</strong></span>
                            </div>
                        </div>
                    </div>

                    <div class="data-rows-list">
                        ${rowsHtml}
                    </div>
                `;
                return card;
            }

            // 6. VEÍCULO + PLACA MERCOSUL MOCKUP
            createVehicleCard(data) {
                const card = document.createElement('div');
                card.className = 'data-card';

                const plate = data['Placa (Mercosul)'] || data['Placa'] || 'ABC1D23';
                const model = data['Modelo'] || data['Marca/Modelo'] || 'Veículo';
                const brand = data['Marca'] || '';
                const year = data['Ano'] || '2025';
                const color = data['Cor'] || 'Prata';

                let rowsHtml = '';
                for (const [label, val] of Object.entries(data)) {
                    rowsHtml += `
                        <div class="data-item-row" onclick="window.app.copyValue('${String(val).replace(/'/g, "\'")}', '${label}')" title="Clique para copiar">
                            <span class="data-item-label">${label}</span>
                            <span class="data-item-value">${val}</span>
                            <i class="fas fa-copy data-item-copy-icon"></i>
                        </div>
                    `;
                }

                card.innerHTML = `
                    <div class="card-header">
                        <div class="card-title-group">
                            <div class="category-icon icon-vehicle">
                                <i class="fas fa-car"></i>
                            </div>
                            <span class="card-title">Veículo Automotor</span>
                        </div>
                        <button class="copy-section-btn" onclick="window.app.copySection('veiculo')">
                            <i class="fas fa-copy"></i> Seção
                        </button>
                    </div>

                    <!-- Visual Mercosul Plate Mockup -->
                    <div class="mercosul-plate-mockup">
                        <div class="plate-blue-strip">
                            <div class="plate-stars-flag">
                                <div class="plate-brazil-flag"></div>
                                <span>BRASIL</span>
                            </div>
                            <span>MERCOSUL</span>
                        </div>
                        <div class="plate-letters-box">
                            <div class="plate-letters">${plate}</div>
                            <div class="vehicle-model-pill"><i class="fas fa-car-side"></i> ${brand ? brand + ' ' : ''}${model} • ${year} • ${color}</div>
                        </div>
                    </div>

                    <div class="data-rows-list">
                        ${rowsHtml}
                    </div>
                `;
                return card;
            }

            // 7. PESSOA JURÍDICA + CARTÃO CNPJ MOCKUP
            createCompanyCard(data) {
                const card = document.createElement('div');
                card.className = 'data-card';

                const cnpj = data['CNPJ'] || '00.000.000/0001-00';
                const companyName = data['Razão Social'] || data['Nome Fantasia'] || 'EMPRESA LTDA';

                let rowsHtml = '';
                for (const [label, val] of Object.entries(data)) {
                    rowsHtml += `
                        <div class="data-item-row" onclick="window.app.copyValue('${String(val).replace(/'/g, "\'")}', '${label}')" title="Clique para copiar">
                            <span class="data-item-label">${label}</span>
                            <span class="data-item-value">${val}</span>
                            <i class="fas fa-copy data-item-copy-icon"></i>
                        </div>
                    `;
                }

                card.innerHTML = `
                    <div class="card-header">
                        <div class="card-title-group">
                            <div class="category-icon icon-company">
                                <i class="fas fa-briefcase"></i>
                            </div>
                            <span class="card-title">Pessoa Jurídica (PJ)</span>
                        </div>
                        <button class="copy-section-btn" onclick="window.app.copySection('pessoaJuridica')">
                            <i class="fas fa-copy"></i> Seção
                        </button>
                    </div>

                    <!-- Visual CNPJ Mockup -->
                    <div class="cnpj-card-mockup">
                        <div class="cnpj-top">
                            <span><i class="fas fa-building"></i> RECEITA FEDERAL • CADASTRO CNPJ</span>
                            <span class="cnpj-status-tag"><i class="fas fa-check"></i> ATIVA</span>
                        </div>
                        <div class="cnpj-highlight-num">${cnpj}</div>
                        <div class="cnpj-company-name">${companyName}</div>
                    </div>

                    <div class="data-rows-list">
                        ${rowsHtml}
                    </div>
                `;
                return card;
            }

            copyValue(val, label) {
                navigator.clipboard.writeText(val).then(() => {
                    this.showToast(`${label || 'Valor'} copiado para a área de transferência!`, 'success');
                }).catch(() => {
                    this.fallbackCopy(val);
                });
            }

            copySection(key) {
                const section = this.generatedData[key];
                if (!section) return;
                const text = Object.entries(section).map(([k, v]) => `${k}: ${v}`).join('\n');
                navigator.clipboard.writeText(text).then(() => {
                    this.showToast('Todos os dados da seção copiados!', 'success');
                });
            }

            copyAll() {
                const lines = [];
                for (const [sectionKey, sectionData] of Object.entries(this.generatedData)) {
                    lines.push(`=== ${sectionKey.toUpperCase()} ===`);
                    for (const [label, val] of Object.entries(sectionData)) {
                        lines.push(`${label}: ${val}`);
                    }
                    lines.push('');
                }
                const fullText = lines.join('\n');
                navigator.clipboard.writeText(fullText).then(() => {
                    this.showToast('Todos os dados cadastrais copiados com sucesso!', 'success');
                });
            }

            fallbackCopy(text) {
                const textarea = document.createElement('textarea');
                textarea.value = text;
                document.body.appendChild(textarea);
                textarea.select();
                document.execCommand('copy');
                document.body.removeChild(textarea);
                this.showToast('Copiado para a área de transferência!', 'success');
            }

            exportJSON() {
                const jsonStr = JSON.stringify(this.generatedData, null, 2);
                this.downloadFile(jsonStr, 'datagen_dados.json', 'application/json');
                this.showToast('Arquivo JSON exportado!', 'success');
            }

            exportCSV() {
                let csv = 'Categoria;Campo;Valor\n';
                for (const [section, data] of Object.entries(this.generatedData)) {
                    for (const [label, value] of Object.entries(data)) {
                        csv += `"${section}";"${label}";"${String(value).replace(/"/g, '""')}"\n`;
                    }
                }
                this.downloadFile(csv, 'datagen_dados.csv', 'text/csv;charset=utf-8;');
                this.showToast('Arquivo CSV exportado!', 'success');
            }

            downloadFile(content, filename, type) {
                const blob = new Blob(['\uFEFF' + content], { type: type });
                const url = URL.createObjectURL(blob);
                const a = document.createElement('a');
                a.href = url;
                a.download = filename;
                document.body.appendChild(a);
                a.click();
                document.body.removeChild(a);
                URL.revokeObjectURL(url);
            }

            saveToHistory() {
                if (!this.generatedData.dadosPessoais) return;
                const record = {
                    id: Date.now(),
                    timestamp: new Date().toLocaleTimeString('pt-BR', { hour: '2-digit', minute: '2-digit' }),
                    name: this.generatedData.dadosPessoais['Nome Completo'],
                    cpf: this.generatedData.documentos ? this.generatedData.documentos['CPF'] : '',
                    data: this.generatedData
                };
                this.history.unshift(record);
                if (this.history.length > 20) this.history.pop();
                localStorage.setItem('datagenHistory', JSON.stringify(this.history));
                this.updateHistoryCount();
                this.renderHistory();
            }

            renderHistory() {
                if (!this.historyList) return;
                if (this.history.length === 0) {
                    this.historyList.innerHTML = '<div style="grid-column: 1/-1; text-align: center; color: var(--text-muted); font-size: 12px; padding: 12px;">Nenhum registro no histórico.</div>';
                    return;
                }
                this.historyList.innerHTML = this.history.map(item => `
                    <div class="history-item" onclick="window.app.restoreHistory(${item.id})">
                        <div class="history-name">${item.name}</div>
                        <div class="history-meta">
                            <span>${item.cpf}</span>
                            <span>${item.timestamp}</span>
                        </div>
                    </div>
                `).join('');
            }

            restoreHistory(id) {
                const record = this.history.find(h => h.id === id);
                if (record) {
                    this.generatedData = record.data;
                    this.renderData();
                    this.showButtons();
                    this.showToast(`Restaurado: ${record.name}`, 'info');
                }
            }

            toggleHistory() {
                const isVisible = this.historyPanel.style.display === 'block';
                this.historyPanel.style.display = isVisible ? 'none' : 'block';
                if (!isVisible) this.renderHistory();
            }

            clearHistory() {
                if (confirm('Deseja limpar todo o histórico de dados gerados?')) {
                    this.history = [];
                    localStorage.removeItem('datagenHistory');
                    this.updateHistoryCount();
                    this.renderHistory();
                    this.showToast('Histórico limpo!', 'info');
                }
            }

            showButtons() {
                this.copyAllBtn.style.display = 'inline-flex';
                this.exportJsonBtn.style.display = 'inline-flex';
                this.exportCsvBtn.style.display = 'inline-flex';
                this.historyBtn.style.display = 'inline-flex';
            }

            showToast(message, type = 'success') {
                const container = document.getElementById('toast-container');
                if (!container) return;
                const toast = document.createElement('div');
                toast.className = `toast ${type}`;
                const icon = type === 'success' ? 'fa-circle-check' : 'fa-circle-info';
                toast.innerHTML = `<i class="fas ${icon}"></i><span>${message}</span>`;
                container.appendChild(toast);

                setTimeout(() => toast.classList.add('show'), 10);
                setTimeout(() => {
                    toast.classList.remove('show');
                    setTimeout(() => {
                        if (toast.parentNode === container) {
                            container.removeChild(toast);
                        }
                    }, 300);
                }, 2800);
            }
        }

        // Initialize application on DOM ready
        document.addEventListener('DOMContentLoaded', () => {
            window.app = new App();
        });
    </script>
</body>
</html>
