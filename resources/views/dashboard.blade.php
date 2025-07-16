<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Senandika - Platform Edukasi Kesehatan Mental</title>
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css" />
    @vite('resources/css/app.css')
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    @stack('head')
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        
        :root {
            --primary: #4682A9;
            --secondary: #749BC2;
            --accent: #91C8E4;
            --text-dark: #1f2937;
            --text-gray: #6b7280;
            --bg-light: #f9fafb;
            --white: #ffffff;
            --gradient-primary: linear-gradient(135deg, var(--primary), var(--secondary));
            --gradient-bg: linear-gradient(135deg, rgba(145, 200, 228, 0.1), rgba(70, 130, 169, 0.1));
            --glass: rgba(255, 255, 255, 0.1);
            --glass-border: rgba(255, 255, 255, 0.2);
            --shadow: 0 10px 40px rgba(0, 0, 0, 0.1);
            --shadow-hover: 0 20px 60px rgba(0, 0, 0, 0.15);
        }

        body {
            font-family: 'Inter', sans-serif;
            line-height: 1.6;
            color: #333;
            background: var(--white);
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        /* Simplified Header */
        .header {
            position: fixed;
            top: 0;
            width: 100%;
            background: white;
            border-bottom: 1px solid #e5e7eb;
            z-index: 1000;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
        }

        .nav-wrapper {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 1rem 0;
        }
        .profile-button {
            margin-left: 1rem;
        }

        .profile-btn {
            border: none;
            background: none;
            cursor: pointer;
            padding: 0;
        }

        .profile-img {
            width: 36px;
            height: 36px;
            border-radius: 50%;
            object-fit: cover;
            transition: transform 0.2s ease;
        }

        .profile-img:hover {
            transform: scale(1.05);
        }


        .logo {
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .logo-icon {
            font-size: 1.8rem;
        }

        .logo-text {
            font-size: 1.5rem;
            font-weight: 700;
            color: var(--primary);
        }

        .nav-desktop {
            display: flex;
            gap: 2rem;
        }

        .nav-link {
            text-decoration: none;
            color: var(--text-dark);
            font-weight: 500;
            font-size: 1rem;
            padding: 0.5rem 1rem;
            border-radius: 6px;
            transition: all 0.2s ease;
        }

        .nav-link:hover,
        .nav-link.active {
            color: var(--primary);
            background: rgba(70, 130, 169, 0.1);
        }

        .mobile-menu-btn {
            display: none;
            background: none;
            border: none;
            cursor: pointer;
            padding: 0.5rem;
        }

        .hamburger,
        .hamburger::before,
        .hamburger::after {
            display: block;
            width: 20px;
            height: 2px;
            background: var(--text-dark);
            transition: all 0.2s ease;
        }

        .hamburger {
            position: relative;
        }

        .hamburger::before,
        .hamburger::after {
            content: '';
            position: absolute;
        }

        .hamburger::before { top: -6px; }
        .hamburger::after { top: 6px; }

        .mobile-menu-btn.active .hamburger { background: transparent; }
        .mobile-menu-btn.active .hamburger::before { transform: rotate(45deg); top: 0; }
        .mobile-menu-btn.active .hamburger::after { transform: rotate(-45deg); top: 0; }

        .nav-mobile {
            display: none;
            flex-direction: column;
            background: white;
            border-top: 1px solid #e5e7eb;
            padding: 1rem 0;
        }

        .nav-mobile.active {
            display: flex;
        }

        .nav-link-mobile {
            text-decoration: none;
            color: var(--text-dark);
            font-weight: 500;
            padding: 0.75rem 1rem;
            transition: all 0.2s ease;
        }

        .nav-link-mobile:hover {
            color: var(--primary);
            background: rgba(70, 130, 169, 0.1);
        }

        .hero {
            padding: 8rem 0 4rem;
            background: linear-gradient(135deg, rgba(145, 200, 228, 0.2) 0%, rgba(255, 255, 255, 1) 50%, rgba(116, 155, 194, 0.1) 100%);
            position: relative;
            overflow: hidden;
        }

        .hero::before {
            content: '';
            position: absolute;
            inset: 0;
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><defs><pattern id="grain" width="100" height="100" patternUnits="userSpaceOnUse"><circle cx="25" cy="25" r="1" fill="%234682A9" opacity="0.1"/><circle cx="75" cy="75" r="1" fill="%23749BC2" opacity="0.1"/></pattern></defs><rect width="100" height="100" fill="url(%23grain)"/></svg>');
            opacity: 0.3;
            z-index: 0;
        }

        .hero-content {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 3rem;
            align-items: center;
            position: relative;
            z-index: 1;
        }

        .hero-badge {
            display: inline-flex;
            align-items: center;
            background: rgba(70, 130, 169, 0.1);
            backdrop-filter: blur(10px);
            color: var(--primary);
            padding: 0.7rem 1.5rem;
            border-radius: 50px;
            font-size: 0.9rem;
            font-weight: 600;
            margin-bottom: 2rem;
            border: 1px solid rgba(70, 130, 169, 0.2);
            box-shadow: 0 4px 20px rgba(70, 130, 169, 0.1);
            transition: all 0.3s ease;
        }

        .hero-badge:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 30px rgba(70, 130, 169, 0.2);
        }

        .hero-title {
            font-size: 3.8rem;
            font-weight: 900;
            line-height: 1.1;
            color: var(--text-dark);
            margin-bottom: 2rem;
        }

        .text-primary {
            background: var(--gradient-primary);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .hero-description {
            font-size: 1.3rem;
            color: var(--text-gray);
            margin-bottom: 2.5rem;
            line-height: 1.7;
            font-weight: 400;
        }

        .hero-buttons {
            display: flex;
            gap: 1.5rem;
            margin-bottom: 3rem;
        }

        .btn {
            padding: 1.2rem 2.5rem;
            border-radius: 50px;
            font-weight: 700;
            text-decoration: none;
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            display: inline-block;
            text-align: center;
            position: relative;
            overflow: hidden;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            font-size: 0.9rem;
        }

        .btn::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            transition: left 0.4s ease;
            z-index: -1;
        }

        .btn:hover::before { left: 0; }

        .btn:hover {
            transform: translateY(-3px);
        }

        .btn-primary {
            background: var(--gradient-primary);
            color: white;
            box-shadow: 0 8px 30px rgba(70, 130, 169, 0.4);
            border: none;
        }

        .btn-primary::before {
            background: linear-gradient(135deg, var(--secondary), var(--accent));
        }

        .btn-primary:hover {
            box-shadow: 0 15px 40px rgba(70, 130, 169, 0.5);
        }

        .btn-outline {
            border: 2px solid var(--primary);
            color: var(--primary);
            background: rgba(255, 255, 255, 0.8);
            backdrop-filter: blur(10px);
        }

        .btn-outline::before {
            background: var(--gradient-primary);
        }

        .btn-outline:hover {
            color: white;
            border-color: transparent;
            box-shadow: 0 15px 40px rgba(70, 130, 169, 0.3);
        }

        .hero-stats {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 2rem;
            text-align: center;
        }

        .stat {
            background: rgba(255, 255, 255, 0.7);
            backdrop-filter: blur(10px);
            padding: 1.5rem;
            border-radius: 20px;
            border: 1px solid rgba(255, 255, 255, 0.3);
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
        }

        .stat:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.15);
        }

        .stat-number {
            font-size: 1.8rem;
            font-weight: 800;
            background: var(--gradient-primary);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            margin-bottom: 0.5rem;
        }

        .stat-label {
            font-size: 0.9rem;
            color: var(--text-gray);
            font-weight: 500;
        }

        .hero-visual {
            position: relative;
        }

        .brain-illustration {
            width: 100%;
            max-width: 500px;
            margin: 0 auto;
            filter: drop-shadow(0 10px 30px rgba(70, 130, 169, 0.2));
        }

        .brain-svg {
            width: 100%;
            height: auto;
        }

        .floating-1 { animation: float 3s ease-in-out infinite; }
        .floating-2 { animation: float 4s ease-in-out infinite; }
        .floating-3 { animation: float 5s ease-in-out infinite; }

        @keyframes float {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-20px); }
        }

        .section-header {
            text-align: center;
            margin-bottom: 4rem;
        }

        .section-title {
            font-size: 2.8rem;
            font-weight: 800;
            color: var(--text-dark);
            margin-bottom: 1.5rem;
        }

        .section-subtitle {
            font-size: 1.2rem;
            color: var(--text-gray);
            max-width: 600px;
            margin: 0 auto;
            font-weight: 400;
            line-height: 1.6;
        }

        .section-divider {
            width: 8rem;
            height: 4px;
            background: linear-gradient(to right, var(--primary), var(--accent));
            margin: 2rem auto 0;
            border-radius: 2px;
        }

        .about {
            padding: 5rem 0;
            background: rgba(249, 250, 251, 0.5);
        }

        .about-content {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 3rem;
            align-items: start;
        }

        .about-card {
            background: rgba(255, 255, 255, 0.8);
            backdrop-filter: blur(20px);
            padding: 3rem;
            border-radius: 25px;
            border: 1px solid rgba(255, 255, 255, 0.3);
            box-shadow: var(--shadow);
            transition: all 0.3s ease;
        }

        .about-card:hover {
            transform: translateY(-5px);
            box-shadow: var(--shadow-hover);
        }

        .about-icon {
            font-size: 3.5rem;
            margin-bottom: 1.5rem;
            filter: drop-shadow(0 4px 8px rgba(70, 130, 169, 0.3));
        }

        .about-card h3 {
            font-size: 1.8rem;
            font-weight: 700;
            color: var(--text-dark);
            margin-bottom: 1.5rem;
        }

        .about-card p {
            color: var(--text-gray);
            margin-bottom: 1.5rem;
            line-height: 1.7;
            font-size: 1.05rem;
        }

        .about-aspects {
            display: flex;
            flex-direction: column;
            gap: 2rem;
        }

        .aspect-card {
            background: rgba(255, 255, 255, 0.9);
            backdrop-filter: blur(10px);
            padding: 2rem;
            border-radius: 20px;
            border: 1px solid rgba(145, 200, 228, 0.2);
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }

        .aspect-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: var(--gradient-bg);
            transition: left 0.3s ease;
            z-index: -1;
        }

        .aspect-card:hover::before { left: 0; }

        .aspect-card:hover {
            transform: translateY(-3px);
            box-shadow: var(--shadow);
        }

        .aspect-card h4 {
            font-size: 1.3rem;
            font-weight: 600;
            color: var(--text-dark);
            margin-bottom: 0.8rem;
        }

        .aspect-card p {
            color: var(--text-gray);
            line-height: 1.6;
        }

        .signs {
            padding: 5rem 0;
            background: linear-gradient(135deg, rgba(145, 200, 228, 0.1) 0%, rgba(255, 255, 255, 1) 100%);
        }

        .signs-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
            gap: 2.5rem;
        }

        .sign-card {
            background: rgba(255, 255, 255, 0.9);
            backdrop-filter: blur(20px);
            padding: 2.5rem;
            border-radius: 25px;
            border: 1px solid rgba(255, 255, 255, 0.3);
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            text-align: center;
            position: relative;
            overflow: hidden;
        }

        .sign-card::before {
            content: '';
            position: absolute;
            inset: 0;
            background: var(--gradient-bg);
            opacity: 0;
            transition: opacity 0.3s ease;
            z-index: -1;
        }

        .sign-card:hover::before { opacity: 1; }

        .sign-card:hover {
            transform: translateY(-8px);
            box-shadow: var(--shadow-hover);
            border-color: rgba(70, 130, 169, 0.3);
        }

        .sign-icon {
            width: 5rem;
            height: 5rem;
            border-radius: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 2.5rem;
            margin: 0 auto 1.5rem;
            transition: all 0.4s ease;
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.1);
        }

        .sign-card:hover .sign-icon {
            transform: scale(1.1) rotate(5deg);
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.2);
        }

        .sign-icon.heart { background: linear-gradient(135deg, #ec4899, #f43f5e); }
        .sign-icon.brain { background: linear-gradient(135deg, #3b82f6, #6366f1); }
        .sign-icon.social { background: linear-gradient(135deg, #10b981, #059669); }
        .sign-icon.resilience { background: linear-gradient(135deg, #8b5cf6, #7c3aed); }
        .sign-icon.productivity { background: linear-gradient(135deg, #f59e0b, #ea580c); }
        .sign-icon.acceptance { background: linear-gradient(135deg, #06b6d4, #0891b2); }

        .sign-card h3 {
            font-size: 1.4rem;
            font-weight: 700;
            color: var(--text-dark);
            margin-bottom: 1rem;
        }

        .sign-card p {
            color: var(--text-gray);
            line-height: 1.6;
            font-size: 1.05rem;
        }

        .disorders {
            padding: 5rem 0;
            background: linear-gradient(135deg, var(--bg-light) 0%, white 100%);
        }

        .disorders-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(380px, 1fr));
            gap: 2.5rem;
            margin-bottom: 4rem;
        }

        .disorder-card {
            padding: 2.5rem;
            border-radius: 25px;
            box-shadow: var(--shadow);
            border: 2px solid transparent;
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            position: relative;
            overflow: hidden;
            backdrop-filter: blur(10px);
        }

        .disorder-card::before {
            content: '';
            position: absolute;
            top: 0;
            right: 0;
            width: 6rem;
            height: 6rem;
            opacity: 0.1;
            border-radius: 0 25px 0 100%;
            transition: all 0.3s ease;
        }

        .disorder-card.depression { background: linear-gradient(135deg, #dbeafe 0%, rgba(219, 234, 254, 0.8) 100%); }
        .disorder-card.depression::before { background: linear-gradient(135deg, #3b82f6, #1d4ed8); }
        .disorder-card.anxiety { background: linear-gradient(135deg, #fef3c7 0%, rgba(254, 243, 199, 0.8) 100%); }
        .disorder-card.anxiety::before { background: linear-gradient(135deg, #f59e0b, #ea580c); }
        .disorder-card.bipolar { background: linear-gradient(135deg, #f3e8ff 0%, rgba(243, 232, 255, 0.8) 100%); }
        .disorder-card.bipolar::before { background: linear-gradient(135deg, #8b5cf6, #ec4899); }
        .disorder-card.ptsd { background: linear-gradient(135deg, #fee2e2 0%, rgba(254, 226, 226, 0.8) 100%); }
        .disorder-card.ptsd::before { background: linear-gradient(135deg, #ef4444, #dc2626); }
        .disorder-card.ocd { background: linear-gradient(135deg, #d1fae5 0%, rgba(209, 250, 229, 0.8) 100%); }
        .disorder-card.ocd::before { background: linear-gradient(135deg, #10b981, #047857); }
        .disorder-card.eating { background: linear-gradient(135deg, #e0e7ff 0%, rgba(224, 231, 255, 0.8) 100%); }
        .disorder-card.eating::before { background: linear-gradient(135deg, #6366f1, #3b82f6); }

        .disorder-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 25px 80px rgba(0, 0, 0, 0.2);
            border-color: rgba(255, 255, 255, 0.5);
        }

        .disorder-card:hover::before {
            opacity: 0.2;
            width: 8rem;
            height: 8rem;
        }

        .disorder-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 2rem;
        }

        .disorder-icon {
            font-size: 3.5rem;
            padding: 1rem;
            background: rgba(255, 255, 255, 0.9);
            backdrop-filter: blur(10px);
            border-radius: 20px;
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.1);
            transition: all 0.4s ease;
        }

        .disorder-card:hover .disorder-icon {
            transform: scale(1.1) rotate(-5deg);
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.2);
        }

        .disorder-prevalence {
            background: var(--gradient-primary);
            color: white;
            padding: 0.5rem 1rem;
            border-radius: 25px;
            font-size: 0.8rem;
            font-weight: 700;
            box-shadow: 0 4px 15px rgba(70, 130, 169, 0.3);
        }

        .disorder-card h3 {
            font-size: 1.7rem;
            font-weight: 800;
            color: var(--text-dark);
            margin-bottom: 1.5rem;
        }

        .disorder-card > p {
            color: var(--text-gray);
            margin-bottom: 2rem;
            line-height: 1.7;
            font-size: 1.05rem;
        }

        .symptoms h4 {
            font-size: 1.1rem;
            font-weight: 700;
            color: var(--text-dark);
            margin-bottom: 1rem;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .symptoms ul {
            list-style: none;
            margin-bottom: 2rem;
        }

        .symptoms li {
            color: var(--text-gray);
            font-size: 0.95rem;
            margin-bottom: 0.8rem;
            display: flex;
            align-items: center;
            gap: 1rem;
            padding: 0.5rem 0;
        }

        .symptoms li::before {
            content: '';
            width: 0.6rem;
            height: 0.6rem;
            background: var(--accent);
            border-radius: 50%;
            flex-shrink: 0;
            box-shadow: 0 2px 4px rgba(145, 200, 228, 0.4);
        }

        .disorder-btn {
            width: 100%;
            padding: 1rem 1.5rem;
            border: none;
            border-radius: 15px;
            font-weight: 700;
            cursor: pointer;
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            color: white;
            font-size: 1rem;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            position: relative;
            overflow: hidden;
        }

        .disorder-btn::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: rgba(255, 255, 255, 0.2);
            transition: left 0.4s ease;
            z-index: 1;
        }

        .disorder-btn:hover::before { left: 0; }

        .depression .disorder-btn { background: linear-gradient(135deg, #3b82f6, #1d4ed8); box-shadow: 0 8px 25px rgba(59, 130, 246, 0.4); }
        .anxiety .disorder-btn { background: linear-gradient(135deg, #f59e0b, #ea580c); box-shadow: 0 8px 25px rgba(245, 158, 11, 0.4); }
        .bipolar .disorder-btn { background: linear-gradient(135deg, #8b5cf6, #ec4899); box-shadow: 0 8px 25px rgba(139, 92, 246, 0.4); }
        .ptsd .disorder-btn { background: linear-gradient(135deg, #ef4444, #dc2626); box-shadow: 0 8px 25px rgba(239, 68, 68, 0.4); }
        .ocd .disorder-btn { background: linear-gradient(135deg, #10b981, #047857); box-shadow: 0 8px 25px rgba(16, 185, 129, 0.4); }
        .eating .disorder-btn { background: linear-gradient(135deg, #6366f1, #3b82f6); box-shadow: 0 8px 25px rgba(99, 102, 241, 0.4); }

        .disorder-btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.3);
        }

        .statistics {
            background: rgba(255, 255, 255, 0.9);
            backdrop-filter: blur(20px);
            padding: 3rem;
            border-radius: 25px;
            box-shadow: var(--shadow);
            margin-bottom: 4rem;
            border: 1px solid rgba(255, 255, 255, 0.3);
        }

        .stats-header {
            text-align: center;
            margin-bottom: 3rem;
        }

        .stats-header h3 {
            font-size: 1.8rem;
            font-weight: 800;
            color: var(--text-dark);
            margin-bottom: 0.8rem;
        }

        .stats-header p {
            color: var(--text-gray);
            font-size: 1.1rem;
        }

        .stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
            gap: 2rem;
        }

        .stat-item {
            text-align: center;
            padding: 1.5rem;
            background: rgba(255, 255, 255, 0.5);
            border-radius: 20px;
            transition: all 0.3s ease;
        }

        .stat-item:hover {
            transform: translateY(-5px);
            box-shadow: var(--shadow);
        }

        .stat-item .stat-number {
            font-size: 2.2rem;
            font-weight: 900;
            margin-bottom: 0.8rem;
        }

        .stat-item:nth-child(1) .stat-number { background: var(--gradient-primary); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text; }
        .stat-item:nth-child(2) .stat-number { background: linear-gradient(135deg, var(--secondary), var(--accent)); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text; }
        .stat-item:nth-child(3) .stat-number { background: linear-gradient(135deg, var(--accent), var(--primary)); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text; }
        .stat-item:nth-child(4) .stat-number { background: linear-gradient(135deg, var(--primary), var(--accent)); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text; }

        .stat-item .stat-label {
            font-size: 0.95rem;
            color: var(--text-gray);
            font-weight: 500;
        }

        .important-note {
            background: var(--gradient-bg);
            backdrop-filter: blur(20px);
            padding: 3rem;
            border-radius: 25px;
            text-align: center;
            max-width: 900px;
            margin: 0 auto;
            border: 1px solid rgba(255, 255, 255, 0.3);
            box-shadow: var(--shadow);
        }

        .note-icon {
            font-size: 3.5rem;
            margin-bottom: 1.5rem;
            filter: drop-shadow(0 4px 8px rgba(70, 130, 169, 0.3));
        }

        .important-note h3 {
            font-size: 1.8rem;
            font-weight: 800;
            color: var(--text-dark);
            margin-bottom: 1.5rem;
        }

        .important-note p {
            color: var(--text-gray);
            margin-bottom: 1.5rem;
            line-height: 1.7;
            font-size: 1.1rem;
        }

        .resources {
            padding: 5rem 0;
            background: linear-gradient(135deg, rgba(70, 130, 169, 0.05), rgba(145, 200, 228, 0.05));
        }

        .resources-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 2.5rem;
        }

        .resource-card {
            background: rgba(255, 255, 255, 0.9);
            backdrop-filter: blur(20px);
            padding: 2.5rem;
            border-radius: 25px;
            border: 1px solid rgba(255, 255, 255, 0.3);
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            text-align: center;
            position: relative;
            overflow: hidden;
        }

        .resource-card::before {
            content: '';
            position: absolute;
            inset: 0;
            background: var(--gradient-bg);
            opacity: 0;
            transition: opacity 0.3s ease;
            z-index: -1;
        }

        .resource-card:hover::before { opacity: 1; }

        .resource-card:hover {
            transform: translateY(-8px);
            box-shadow: var(--shadow-hover);
            border-color: rgba(70, 130, 169, 0.3);
        }

        .resource-icon {
            width: 5rem;
            height: 5rem;
            border-radius: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 2.5rem;
            margin: 0 auto 1.5rem;
            color: white;
            transition: all 0.4s ease;
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.1);
        }

        .resource-card:hover .resource-icon {
            transform: scale(1.1) rotate(-5deg);
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.2);
        }

        .resource-icon.articles { background: linear-gradient(135deg, #3b82f6, #1d4ed8); }
        .resource-icon.tips { background: linear-gradient(135deg, #f59e0b, #ea580c); }
        .resource-icon.assessment { background: linear-gradient(135deg, #10b981, #059669); }
        .resource-icon.education { background: linear-gradient(135deg, #8b5cf6, #7c3aed); }

        .resource-card h3 {
            font-size: 1.4rem;
            font-weight: 700;
            color: var(--text-dark);
            margin-bottom: 1rem;
        }

        .resource-card p {
            color: var(--text-gray);
            margin-bottom: 1.5rem;
            line-height: 1.6;
            font-size: 1.05rem;
        }

        .resource-link {
            color: var(--primary);
            text-decoration: none;
            font-weight: 700;
            transition: all 0.3s ease;
            padding: 0.8rem 1.5rem;
            border-radius: 25px;
            background: rgba(70, 130, 169, 0.1);
            display: inline-block;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            font-size: 0.9rem;
        }

        .resource-link:hover {
            background: var(--primary);
            color: white;
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(70, 130, 169, 0.4);
        }

        .contact {
            padding: 5rem 0;
        }

        .contact-content {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 3rem;
        }

        .contact-info h3 {
            font-size: 1.8rem;
            font-weight: 800;
            color: var(--text-dark);
            margin-bottom: 2rem;
        }

        .contact-items {
            display: flex;
            flex-direction: column;
            gap: 2rem;
        }

        .contact-item {
            display: flex;
            align-items: center;
            gap: 1.5rem;
            padding: 1.5rem;
            background: rgba(255, 255, 255, 0.8);
            backdrop-filter: blur(10px);
            border-radius: 20px;
            border: 1px solid rgba(255, 255, 255, 0.3);
            transition: all 0.3s ease;
        }

        .contact-item:hover {
            transform: translateY(-3px);
            box-shadow: var(--shadow);
        }

        .contact-icon {
            width: 3.5rem;
            height: 3.5rem;
            border-radius: 15px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.8rem;
            color: white;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
        }

        .contact-icon.email { background: var(--gradient-primary); }
        .contact-icon.phone { background: linear-gradient(135deg, var(--secondary), var(--accent)); }
        .contact-icon.location { background: linear-gradient(135deg, var(--accent), var(--primary)); }

        .contact-details h4 {
            font-weight: 700;
            color: var(--text-dark);
            margin-bottom: 0.5rem;
            font-size: 1.1rem;
        }

        .contact-details p {
            color: var(--text-gray);
            font-size: 1.05rem;
        }

        .contact-form {
            background: rgba(249, 250, 251, 0.8);
            backdrop-filter: blur(20px);
            padding: 3rem;
            border-radius: 25px;
            border: 1px solid rgba(255, 255, 255, 0.3);
            box-shadow: var(--shadow);
        }

        .contact-form h3 {
            font-size: 1.8rem;
            font-weight: 800;
            color: var(--text-dark);
            margin-bottom: 2rem;
        }

        .form-group {
            margin-bottom: 1.5rem;
        }

        .form-group label {
            display: block;
            font-weight: 600;
            color: var(--text-dark);
            margin-bottom: 0.8rem;
            font-size: 1.05rem;
        }

        .form-group input,
        .form-group textarea {
            width: 100%;
            padding: 1rem 1.5rem;
            border: 2px solid rgba(209, 213, 219, 0.5);
            border-radius: 15px;
            font-size: 1rem;
            transition: all 0.3s ease;
            background: rgba(255, 255, 255, 0.8);
            backdrop-filter: blur(10px);
        }

        .form-group input:focus,
        .form-group textarea:focus {
            outline: none;
            border-color: var(--primary);
            box-shadow: 0 0 0 4px rgba(70, 130, 169, 0.1);
            transform: translateY(-2px);
        }

        .form-group textarea {
            resize: vertical;
            min-height: 120px;
        }

        .footer {
            background: linear-gradient(135deg, #1f2937 0%, #111827 100%);
            color: white;
            padding: 4rem 0;
            position: relative;
            overflow: hidden;
        }

        .footer::before {
            content: '';
            position: absolute;
            inset: 0;
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><defs><pattern id="footerGrain" width="100" height="100" patternUnits="userSpaceOnUse"><circle cx="25" cy="25" r="0.5" fill="%234682A9" opacity="0.1"/><circle cx="75" cy="75" r="0.5" fill="%23749BC2" opacity="0.1"/></pattern></defs><rect width="100" height="100" fill="url(%23footerGrain)"/></svg>');
            opacity: 0.3;
            z-index: 0;
        }

        .footer-content {
            text-align: center;
            position: relative;
            z-index: 1;
        }

        .footer-logo {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 1rem;
            margin-bottom: 2rem;
        }

        .footer-logo .logo-icon {
            font-size: 2.5rem;
            filter: drop-shadow(0 4px 8px rgba(70, 130, 169, 0.5));
        }

        .footer-logo .logo-text {
            font-size: 1.8rem;
            font-weight: 900;
            background: linear-gradient(135deg, #91C8E4, #4682A9);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .footer-description {
            color: #9ca3af;
            max-width: 700px;
            margin: 0 auto 3rem;
            line-height: 1.7;
            font-size: 1.1rem;
        }

        .footer-bottom {
            border-top: 1px solid rgba(55, 65, 81, 0.5);
            padding-top: 2rem;
        }

        .footer-bottom p {
            color: #9ca3af;
            font-size: 1rem;
        }

        @media (max-width: 768px) {
            .nav-desktop { display: none; }
            .mobile-menu-btn { display: block; }
            .hero { padding: 6rem 0 3rem; }
            .hero-content { grid-template-columns: 1fr; text-align: center; gap: 2rem; }
            .hero-title { font-size: 2.8rem; }
            .hero-buttons { flex-direction: column; gap: 1rem; }
            .hero-stats { grid-template-columns: 1fr; gap: 1rem; }
            .about-content, .contact-content { grid-template-columns: 1fr; gap: 2rem; }
            .disorders-grid { grid-template-columns: 1fr; }
            .stats-grid { grid-template-columns: repeat(2, 1fr); }
            .section-title { font-size: 2.2rem; }
        }

        @media (max-width: 480px) {
            .container { padding: 0 15px; }
            .hero { padding: 5rem 0 2rem; }
            .hero-title { font-size: 2.2rem; }
            .section-title { font-size: 1.8rem; }
            .stats-grid { grid-template-columns: 1fr; }
            .nav-wrapper { padding: 0.8rem 0; }
            .btn { padding: 1rem 1.5rem; font-size: 0.85rem; }
        }

        html { scroll-behavior: smooth; }

        @keyframes fadeInUp {
            from { opacity: 0; transform: translateY(30px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .fade-in-up { animation: fadeInUp 0.6s ease-out; }
    </style>
        @php
            $user = Auth::user();
            $imageUrl = $user->image ? asset('storage/' . $user->image) : 'https://placehold.co/32x32/E2E8F0/A0AEC0?text=P';
        @endphp
</head>
<body>
<header class="header">
    <div class="container">
        <div class="nav-wrapper">
            <div class="logo">
                <div class="logo-icon">🧠</div>
                <span class="logo-text">Senandika</span>
            </div>
            
            <nav class="nav-desktop">
                <a href="/dashboard" class="nav-link active">Dashboard</a>
                <a href="/posts" class="nav-link">Articles</a>
                <a href="/chat" class="nav-link">Chat</a>
            </nav>

            <!-- Foto profil -->
            <div class="profile-button">
                <a href="{{ route('profile') }}" class="flex items-center focus:outline-none rounded-full transition-all duration-200 ease-in-out hover:shadow-md">
                    <button @click="open = !open" class="flex items-center focus:outline-none rounded-full transition-all duration-200 ease-in-out hover:shadow-md">
                        <img class="w-8 h-8 rounded-full" src="{{ $imageUrl }}" alt="Foto Profil">
                    </button>
                </a>
            </div>

            <!-- Tombol mobile menu -->
            <button class="mobile-menu-btn" onclick="toggleMobileMenu()">
                <span class="hamburger"></span>
            </button>
        </div>
        
        <nav class="nav-mobile" id="mobileNav">
            <a href="#home" class="nav-link-mobile">Dashboard</a>
            <a href="#resources" class="nav-link-mobile">Articles</a>
            <a href="#about" class="nav-link-mobile">About</a>
        </nav>
    </div>
</header>


    <section id="home" class="hero">
        <div class="container">
            <div class="hero-content">
                <div class="hero-text">
                    <div class="hero-badge">🧠 Platform Edukasi Kesehatan Mental</div>
                    <h1 class="hero-title">Memahami dan<br><span class="text-primary">Menjaga</span><br>Kesehatan Mental</h1>
                    <p class="hero-description">Platform edukasi komprehensif yang menyediakan informasi, panduan, dan sumber daya untuk membantu Anda memahami dan menjaga kesehatan mental dengan lebih baik.</p>
                    
                    <div class="hero-buttons">
                        <a href="#resources" class="btn btn-primary">Jelajahi Sumber Daya</a>
                        <a href="#about" class="btn btn-outline">Pelajari Lebih Lanjut</a>
                    </div>
                    
                    <div class="hero-stats">
                        <div class="stat">
                            <div class="stat-number">1000+</div>
                            <div class="stat-label">Artikel Edukatif</div>
                        </div>
                        <div class="stat">
                            <div class="stat-number">50+</div>
                            <div class="stat-label">Panduan Praktis</div>
                        </div>
                        <div class="stat">
                            <div class="stat-number">24/7</div>
                            <div class="stat-label">Akses Gratis</div>
                        </div>
                    </div>
                </div>
                
                <div class="hero-visual">
                    <div class="brain-illustration">
                        <svg viewBox="0 0 400 400" class="brain-svg">
                            <circle cx="200" cy="200" r="180" fill="#91C8E4" opacity="0.1" />
                            <g transform="translate(200,200)">
                                <path d="M-60,-80 C-80,-100 -80,-120 -60,-130 C-40,-140 -20,-140 0,-130 C20,-140 40,-140 60,-130 C80,-120 80,-100 60,-80 C60,-60 60,-40 50,-20 C40,0 20,10 0,10 C-20,10 -40,0 -50,-20 C-60,-40 -60,-60 -60,-80 Z" fill="#4682A9" opacity="0.8" />
                                <path d="M-40,-60 C-20,-70 0,-70 20,-60 C40,-50 50,-30 40,-10 C30,10 10,20 -10,20 C-30,20 -50,10 -60,-10 C-70,-30 -60,-50 -40,-60 Z" fill="#749BC2" opacity="0.6" />
                                <circle cx="-30" cy="-40" r="4" fill="#91C8E4" />
                                <circle cx="30" cy="-40" r="4" fill="#91C8E4" />
                                <circle cx="0" cy="-20" r="4" fill="#91C8E4" />
                                <circle cx="-20" cy="0" r="4" fill="#91C8E4" />
                                <circle cx="20" cy="0" r="4" fill="#91C8E4" />
                                <line x1="-30" y1="-40" x2="0" y2="-20" stroke="#4682A9" stroke-width="2" opacity="0.5" />
                                <line x1="30" y1="-40" x2="0" y2="-20" stroke="#4682A9" stroke-width="2" opacity="0.5" />
                                <line x1="0" y1="-20" x2="-20" y2="0" stroke="#4682A9" stroke-width="2" opacity="0.5" />
                                <line x1="0" y1="-20" x2="20" y2="0" stroke="#4682A9" stroke-width="2" opacity="0.5" />
                            </g>
                            <circle cx="100" cy="100" r="8" fill="#91C8E4" opacity="0.6" class="floating-1" />
                            <circle cx="300" cy="120" r="6" fill="#749BC2" opacity="0.6" class="floating-2" />
                            <circle cx="320" cy="280" r="10" fill="#4682A9" opacity="0.4" class="floating-3" />
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="about" class="about">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">Apa itu Kesehatan Mental?</h2>
                <p class="section-subtitle">Memahami pentingnya kesehatan mental dalam kehidupan sehari-hari</p>
            </div>
            
            <div class="about-content">
                <div class="about-main">
                    <div class="about-card">
                        <div class="about-icon">🧠</div>
                        <h3>Definisi Kesehatan Mental</h3>
                        <p>Kesehatan mental adalah keadaan kesejahteraan di mana individu menyadari kemampuannya sendiri, dapat mengatasi tekanan hidup yang normal, dapat bekerja secara produktif, dan mampu memberikan kontribusi kepada komunitasnya.</p>
                        <p>Kesehatan mental bukan hanya ketiadaan gangguan mental, tetapi juga mencakup kemampuan untuk menikmati hidup, mencapai keseimbangan, dan beradaptasi dengan perubahan.</p>
                    </div>
                </div>
                
                <div class="about-aspects">
                    <div class="aspect-card">
                        <h4>Aspek Emosional</h4>
                        <p>Kemampuan mengelola dan mengekspresikan emosi dengan sehat</p>
                    </div>
                    <div class="aspect-card">
                        <h4>Aspek Psikologis</h4>
                        <p>Fungsi kognitif yang optimal dan penerimaan diri yang positif</p>
                    </div>
                    <div class="aspect-card">
                        <h4>Aspek Sosial</h4>
                        <p>Kemampuan membangun hubungan yang bermakna dengan orang lain</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="signs" class="signs">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">Ciri-Ciri Kesehatan Mental yang Baik</h2>
                <p class="section-subtitle">Kenali tanda-tanda kesehatan mental yang optimal dalam diri Anda</p>
            </div>
            
            <div class="signs-grid">
                <div class="sign-card">
                    <div class="sign-icon heart">❤️</div>
                    <h3>Kesejahteraan Emosional</h3>
                    <p>Mampu mengelola emosi dengan baik dan merasa puas dengan hidup</p>
                </div>
                <div class="sign-card">
                    <div class="sign-icon brain">🧠</div>
                    <h3>Fungsi Kognitif Optimal</h3>
                    <p>Dapat berpikir jernih, berkonsentrasi, dan membuat keputusan dengan baik</p>
                </div>
                <div class="sign-card">
                    <div class="sign-icon social">👥</div>
                    <h3>Hubungan Sosial Sehat</h3>
                    <p>Mampu membangun dan mempertahankan hubungan yang bermakna</p>
                </div>
                <div class="sign-card">
                    <div class="sign-icon resilience">🛡️</div>
                    <h3>Resiliensi</h3>
                    <p>Kemampuan untuk bangkit dari kesulitan dan beradaptasi dengan perubahan</p>
                </div>
                <div class="sign-card">
                    <div class="sign-icon productivity">⚡</div>
                    <h3>Produktivitas</h3>
                    <p>Mampu berfungsi dengan baik dalam pekerjaan dan aktivitas sehari-hari</p>
                </div>
                <div class="sign-card">
                    <div class="sign-icon acceptance">✅</div>
                    <h3>Penerimaan Diri</h3>
                    <p>Memiliki harga diri yang sehat dan menerima kelebihan serta kekurangan diri</p>
                </div>
            </div>
        </div>
    </section>

    <section id="disorders" class="disorders">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">Jenis-Jenis Gangguan Kesehatan Mental</h2>
                <p class="section-subtitle">Memahami berbagai gangguan kesehatan mental yang umum terjadi</p>
                <div class="section-divider"></div>
            </div>
            
            <div class="disorders-grid">
                <div class="disorder-card depression">
                    <div class="disorder-header">
                        <div class="disorder-icon">😔</div>
                        <div class="disorder-prevalence">264 juta orang di dunia</div>
                    </div>
                    <h3>Depresi</h3>
                    <p>Gangguan mood yang menyebabkan perasaan sedih berkepanjangan dan kehilangan minat pada aktivitas sehari-hari.</p>
                    <div class="symptoms">
                        <h4>⚠️ Gejala Umum:</h4>
                        <ul>
                            <li>Perasaan sedih terus-menerus</li>
                            <li>Kehilangan energi</li>
                            <li>Gangguan tidur</li>
                            <li>Perubahan nafsu makan</li>
                        </ul>
                    </div>
                    <button class="disorder-btn">Pelajari Lebih Lanjut</button>
                </div>
                
                <div class="disorder-card anxiety">
                    <div class="disorder-header">
                        <div class="disorder-icon">😰</div>
                        <div class="disorder-prevalence">301 juta orang di dunia</div>
                    </div>
                    <h3>Kecemasan (Anxiety)</h3>
                    <p>Perasaan khawatir, takut, atau gelisah yang berlebihan dan mengganggu aktivitas sehari-hari.</p>
                    <div class="symptoms">
                        <h4>⚠️ Gejala Umum:</h4>
                        <ul>
                            <li>Kekhawatiran berlebihan</li>
                            <li>Jantung berdebar</li>
                            <li>Berkeringat</li>
                            <li>Sulit berkonsentrasi</li>
                        </ul>
                    </div>
                    <button class="disorder-btn">Pelajari Lebih Lanjut</button>
                </div>
                
                <div class="disorder-card bipolar">
                    <div class="disorder-header">
                        <div class="disorder-icon">🎭</div>
                        <div class="disorder-prevalence">45 juta orang di dunia</div>
                    </div>
                    <h3>Gangguan Bipolar</h3>
                    <p>Gangguan mood yang ditandai dengan perubahan ekstrem antara episode mania dan depresi.</p>
                    <div class="symptoms">
                        <h4>⚠️ Gejala Umum:</h4>
                        <ul>
                            <li>Perubahan mood ekstrem</li>
                            <li>Episode mania</li>
                            <li>Episode depresi</li>
                            <li>Gangguan tidur</li>
                        </ul>
                    </div>
                    <button class="disorder-btn">Pelajari Lebih Lanjut</button>
                </div>
                
                <div class="disorder-card ptsd">
                    <div class="disorder-header">
                        <div class="disorder-icon">⚡</div>
                        <div class="disorder-prevalence">70 juta orang di dunia</div>
                    </div>
                    <h3>PTSD</h3>
                    <p>Gangguan yang terjadi setelah mengalami atau menyaksikan peristiwa traumatis.</p>
                    <div class="symptoms">
                        <h4>⚠️ Gejala Umum:</h4>
                        <ul>
                            <li>Flashback</li>
                            <li>Mimpi buruk</li>
                            <li>Menghindari pemicu</li>
                            <li>Hypervigilance</li>
                        </ul>
                    </div>
                    <button class="disorder-btn">Pelajari Lebih Lanjut</button>
                </div>
                
                <div class="disorder-card ocd">
                    <div class="disorder-header">
                        <div class="disorder-icon">🔄</div>
                        <div class="disorder-prevalence">76 juta orang di dunia</div>
                    </div>
                    <h3>OCD</h3>
                    <p>Gangguan yang ditandai dengan pikiran obsesif dan perilaku kompulsif yang berulang.</p>
                    <div class="symptoms">
                        <h4>⚠️ Gejala Umum:</h4>
                        <ul>
                            <li>Pikiran obsesif</li>
                            <li>Perilaku berulang</li>
                            <li>Kecemasan tinggi</li>
                            <li>Gangguan fungsi sehari-hari</li>
                        </ul>
                    </div>
                    <button class="disorder-btn">Pelajari Lebih Lanjut</button>
                </div>
                
                <div class="disorder-card eating">
                    <div class="disorder-header">
                        <div class="disorder-icon">🍽️</div>
                        <div class="disorder-prevalence">16 juta orang di dunia</div>
                    </div>
                    <h3>Gangguan Makan</h3>
                    <p>Gangguan yang melibatkan pola makan yang tidak sehat dan obsesi terhadap berat badan.</p>
                    <div class="symptoms">
                        <h4>⚠️ Gejala Umum:</h4>
                        <ul>
                            <li>Pola makan tidak teratur</li>
                            <li>Obsesi berat badan</li>
                            <li>Distorsi citra tubuh</li>
                            <li>Isolasi sosial</li>
                        </ul>
                    </div>
                    <button class="disorder-btn">Pelajari Lebih Lanjut</button>
                </div>
            </div>
            
            <div class="statistics">
                <div class="stats-header">
                    <h3>Statistik Global Kesehatan Mental</h3>
                    <p>Data dari World Health Organization (WHO)</p>
                </div>
                <div class="stats-grid">
                    <div class="stat-item">
                        <div class="stat-number">1 dari 4</div>
                        <div class="stat-label">Orang mengalami gangguan mental</div>
                    </div>
                    <div class="stat-item">
                        <div class="stat-number">970 juta</div>
                        <div class="stat-label">Orang dengan gangguan mental di 2019</div>
                    </div>
                    <div class="stat-item">
                        <div class="stat-number">12 miliar</div>
                        <div class="stat-label">Hari kerja hilang per tahun</div>
                    </div>
                    <div class="stat-item">
                        <div class="stat-number">$1 triliun</div>
                        <div class="stat-label">Kerugian ekonomi global per tahun</div>
                    </div>
                </div>
            </div>
            
            <div class="important-note">
                <div class="note-icon">⚠️</div>
                <h3>Penting untuk Diingat</h3>
                <p>Jika Anda mengalami gejala-gejala di atas secara berkelanjutan dan mengganggu aktivitas sehari-hari, sangat disarankan untuk berkonsultasi dengan profesional kesehatan mental.</p>
                <p>Diagnosis yang tepat hanya dapat dilakukan oleh tenaga profesional yang qualified.</p>
            </div>
        </div>
    </section>

    <section id="resources" class="resources">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">Sumber Daya Kesehatan Mental</h2>
                <p class="section-subtitle">Akses berbagai sumber daya edukatif untuk mendukung perjalanan kesehatan mental Anda</p>
            </div>
            
            <div class="resources-grid">
                <div class="resource-card">
                    <div class="resource-icon articles">📚</div>
                    <h3>Artikel & Panduan</h3>
                    <p>Kumpulan artikel edukatif tentang kesehatan mental yang ditulis oleh para ahli</p>
                    <a href="/posts" class="resource-link">Jelajahi 📈</a>
                </div>
                <div class="resource-card">
                    <div class="resource-icon tips">💡</div>
                    <h3>Konsultasi</h3>
                    <p>Strategi praktis untuk menjaga dan meningkatkan kesehatan mental sehari-hari</p>
                    <a href="#" class="resource-link">Jelajahi 📈</a>
                </div>
            </div>
        </div>
    </section>

    <section id="contact" class="contact">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">Hubungi Kami</h2>
                <p class="section-subtitle">Ada pertanyaan tentang kesehatan mental? Kami siap membantu dengan informasi yang Anda butuhkan</p>
            </div>
            
            <div class="contact-content">
                <div class="contact-info">
                    <h3>Informasi Kontak</h3>
                    <div class="contact-items">
                        <div class="contact-item">
                            <div class="contact-icon email">📧</div>
                            <div class="contact-details">
                                <h4>Email</h4>
                                <p>info@senandika.com</p>
                            </div>
                        </div>
                        <div class="contact-item">
                            <div class="contact-icon phone">📞</div>
                            <div class="contact-details">
                                <h4>Telepon</h4>
                                <p>+62 21 1234 5678</p>
                            </div>
                        </div>
                        <div class="contact-item">
                            <div class="contact-icon location">📍</div>
                            <div class="contact-details">
                                <h4>Alamat</h4>
                                <p>Jl. Edukasi Kesehatan Mental No. 123<br>Jakarta Selatan, 12345</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="contact-form">
                    <h3>Kirim Pesan</h3>
                    <form>
                        <div class="form-group">
                            <label for="name">Nama Lengkap</label>
                            <input type="text" id="name" name="name" placeholder="Masukkan nama lengkap" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" id="email" name="email" placeholder="Masukkan email" required>
                        </div>
                        <div class="form-group">
                            <label for="subject">Subjek</label>
                            <input type="text" id="subject" name="subject" placeholder="Subjek pesan" required>
                        </div>
                        <div class="form-group">
                            <label for="message">Pesan</label>
                            <textarea id="message" name="message" rows="4" placeholder="Tulis pesan Anda..." required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Kirim Pesan</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <footer class="footer">
        <div class="container">
            <div class="footer-content">
                <div class="footer-logo">
                    <div class="logo-icon">🧠</div>
                    <span class="logo-text">Senandika</span>
                </div>
                <p class="footer-description">
                    Platform edukasi kesehatan mental yang berkomitmen menyediakan informasi berkualitas dan sumber daya terpercaya untuk mendukung kesejahteraan mental masyarakat.
                </p>
                <div class="footer-bottom">
                    <p>© 2024 Senandika. Semua hak dilindungi. | Platform Edukasi Kesehatan Mental</p>
                </div>
            </div>
        </div>
    </footer>

    <script>
        function toggleMobileMenu() {
            const mobileNav = document.getElementById('mobileNav');
            const mobileMenuBtn = document.querySelector('.mobile-menu-btn');
            
            mobileNav.classList.toggle('active');
            mobileMenuBtn.classList.toggle('active');
        }

        document.addEventListener('DOMContentLoaded', function() {
            const navLinks = document.querySelectorAll('.nav-link, .nav-link-mobile');
            
            navLinks.forEach(link => {
                link.addEventListener('click', function(e) {
                    const targetId = this.getAttribute('href');
                    
                    if (targetId && targetId.startsWith('#')) {
                        e.preventDefault();
                        
                        const desktopLinks = document.querySelectorAll('.nav-link');
                        desktopLinks.forEach(l => l.classList.remove('active'));
                        
                        const correspondingDesktopLink = document.querySelector(`.nav-link[href="${targetId}"]`);
                        if (correspondingDesktopLink) {
                            correspondingDesktopLink.classList.add('active');
                        }
                        
                        const targetSection = document.querySelector(targetId);
                        if (targetSection) {
                            targetSection.scrollIntoView({
                                behavior: 'smooth',
                                block: 'start'
                            });
                        }
                        
                        const mobileNav = document.getElementById('mobileNav');
                        const mobileMenuBtn = document.querySelector('.mobile-menu-btn');
                        if (mobileNav.classList.contains('active')) {
                            mobileNav.classList.remove('active');
                            mobileMenuBtn.classList.remove('active');
                        }
                    }
                });
            });
            
            const sections = document.querySelectorAll('section[id]');
            const observerOptions = {
                rootMargin: '-50px 0px -50px 0px',
                threshold: 0.1
            };
            
            const observer = new IntersectionObserver(function(entries) {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        const id = entry.target.getAttribute('id');
                        const correspondingNavLink = document.querySelector(`.nav-link[href="#${id}"]`);
                        
                        if (correspondingNavLink) {
                            const allNavLinks = document.querySelectorAll('.nav-link');
                            allNavLinks.forEach(link => link.classList.remove('active'));
                            correspondingNavLink.classList.add('active');
                        }
                    }
                });
            }, observerOptions);
            
            sections.forEach(section => {
                observer.observe(section);
            });
            
            const animateOnScroll = () => {
                const elements = document.querySelectorAll('.sign-card, .disorder-card, .resource-card, .aspect-card');
                
                elements.forEach(element => {
                    const elementTop = element.getBoundingClientRect().top;
                    const elementVisible = 150;
                    
                    if (elementTop < window.innerHeight - elementVisible) {
                        element.classList.add('fade-in-up');
                    }
                });
            };
            
            let ticking = false;
            const throttledAnimateOnScroll = () => {
                if (!ticking) {
                    requestAnimationFrame(() => {
                        animateOnScroll();
                        ticking = false;
                    });
                    ticking = true;
                }
            };
            
            window.addEventListener('scroll', throttledAnimateOnScroll);
            animateOnScroll();
            
            const contactForm = document.querySelector('.contact-form form');
            if (contactForm) {
                contactForm.addEventListener('submit', function(e) {
                    e.preventDefault();
                    
                    const formData = new FormData(this);
                    const name = formData.get('name');
                    const email = formData.get('email');
                    const subject = formData.get('subject');
                    const message = formData.get('message');
                    
                    if (!name || !email || !subject || !message) {
                        alert('Mohon lengkapi semua field yang diperlukan.');
                        return;
                    }
                    
                    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                    if (!emailRegex.test(email)) {
                        alert('Format email tidak valid.');
                        return;
                    }
                    
                    const submitBtn = this.querySelector('button[type="submit"]');
                    const originalText = submitBtn.textContent;
                    
                    submitBtn.textContent = 'Mengirim...';
                    submitBtn.disabled = true;
                    
                    setTimeout(() => {
                        alert('Pesan Anda telah berhasil dikirim! Kami akan segera merespons.');
                        this.reset();
                        submitBtn.textContent = originalText;
                        submitBtn.disabled = false;
                    }, 2000);
                });
            }
        
        
            document.addEventListener('click', function(e) {
                const mobileNav = document.getElementById('mobileNav');
                const mobileMenuBtn = document.querySelector('.mobile-menu-btn');
                
                if (mobileNav.classList.contains('active') && 
                    !mobileNav.contains(e.target) && 
                    !mobileMenuBtn.contains(e.target)) {
                    mobileNav.classList.remove('active');
                    mobileMenuBtn.classList.remove('active');
                }
            });
            
            document.addEventListener('keydown', function(e) {
                if (e.key === 'Escape') {
                    const mobileNav = document.getElementById('mobileNav');
                    const mobileMenuBtn = document.querySelector('.mobile-menu-btn');
                    if (mobileNav.classList.contains('active')) {
                        mobileNav.classList.remove('active');
                        mobileMenuBtn.classList.remove('active');
                    }
                }
            });
        });

        window.addEventListener('load', function() {
            document.body.classList.add('loaded');
            
            const cards = document.querySelectorAll('.sign-card, .disorder-card, .resource-card');
            cards.forEach((card, index) => {
                setTimeout(() => {
                    card.style.opacity = '1';
                    card.style.transform = 'translateY(0)';
                }, index * 100);
            });
        });
    </script>
</body>
</html>