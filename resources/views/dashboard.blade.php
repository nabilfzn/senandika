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
            --shadow: 0 8px 30px rgba(0, 0, 0, 0.08);
            --shadow-hover: 0 12px 35px rgba(0, 0, 0, 0.12);
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
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.05);
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
        
        .profile-link {
            display: block;
            border-radius: 50%;
            transition: box-shadow 0.2s ease;
        }
        .profile-link:hover {
            box-shadow: 0 0 0 3px rgba(70, 130, 169, 0.2);
        }

        .profile-img {
            width: 36px;
            height: 36px;
            border-radius: 50%;
            object-fit: cover;
            display: block;
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
            box-shadow: 0 6px 25px rgba(70, 130, 169, 0.15);
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
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
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
            transform: translateY(-2px);
        }

        .btn-primary {
            background: var(--gradient-primary);
            color: white;
            box-shadow: 0 8px 30px rgba(70, 130, 169, 0.3);
            border: none;
        }

        /* .btn-primary::before {
            background: linear-gradient(135deg, var(--secondary), var(--accent));
        } */

        /* .btn-primary:hover {
            box-shadow: 0 12px 35px rgba(70, 130, 169, 0.4);
        } */

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
            box-shadow: 0 12px 35px rgba(70, 130, 169, 0.25);
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
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.08);
            transition: all 0.3s ease;
        }

        .stat:hover {
            transform: translateY(-3px);
            box-shadow: 0 12px 35px rgba(0, 0, 0, 0.12);
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
            50% { transform: translateY(-15px); }
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
            transform: translateY(-3px);
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
            transform: translateY(-2px);
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
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
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
            transform: translateY(-5px);
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
            transition: all 0.3s ease;
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.1);
        }

        .sign-card:hover .sign-icon {
            transform: scale(1.05);
            box-shadow: 0 12px 30px rgba(0, 0, 0, 0.15);
        }

        .sign-icon.heart { background: linear-gradient(135deg, #ec4899, #f43f5e); color: white; }
        .sign-icon.brain { background: linear-gradient(135deg, #3b82f6, #6366f1); color: white; }
        .sign-icon.social { background: linear-gradient(135deg, #10b981, #059669); color: white; }
        .sign-icon.resilience { background: linear-gradient(135deg, #8b5cf6, #7c3aed); color: white; }
        .sign-icon.productivity { background: linear-gradient(135deg, #f59e0b, #ea580c); color: white; }
        .sign-icon.acceptance { background: linear-gradient(135deg, #06b6d4, #0891b2); color: white; }

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


        /* CSS BARU UNTUK BAGIAN GANGGUAN MENTAL */
        .disorders {
            padding: 5rem 0;
            background: var(--bg-light);
        }

        .disorders-grid-new {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 2rem;
            margin-bottom: 4rem;
        }

        .disorder-card-new {
            display: flex;
            flex-direction: column;
            text-align: center;
            padding: 2.5rem 2rem;
            background: var(--white);
            border-radius: 20px;
            box-shadow: var(--shadow);
            transition: all 0.3s ease-in-out;
            text-decoration: none;
            color: inherit;
            border: 1px solid #e5e7eb;
        }

        .disorder-card-new:hover {
            transform: translateY(-5px) scale(1.02);
            box-shadow: var(--shadow-hover);
            border-color: var(--primary);
        }

        .disorder-icon-wrapper {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            margin: 0 auto 1.5rem;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.3s ease;
        }

        .disorder-card-new:hover .disorder-icon-wrapper {
            transform: scale(1.1);
        }

        .disorder-icon-new {
            font-size: 2.5rem;
        }

        .disorder-card-new h3 {
            font-size: 1.5rem;
            font-weight: 700;
            color: var(--text-dark);
            margin-bottom: 0.75rem;
        }

        .disorder-card-new p {
            color: var(--text-gray);
            font-size: 1rem;
            flex-grow: 1; /* Makes p take up available space */
            margin-bottom: 1.5rem;
        }

        .disorder-link {
            font-weight: 600;
            color: var(--primary);
            transition: all 0.2s ease;
            margin-top: auto; /* Pushes the link to the bottom */
        }
        
        .disorder-card-new:hover .disorder-link {
            color: var(--text-dark);
            text-decoration: underline;
        }

        /* Color schemes for new cards */
        .disorder-card-new.depression .disorder-icon-wrapper { background-color: #dbeafe; }
        .disorder-card-new.anxiety .disorder-icon-wrapper { background-color: #fef3c7; }
        .disorder-card-new.bipolar .disorder-icon-wrapper { background-color: #f3e8ff; }
        .disorder-card-new.ptsd .disorder-icon-wrapper { background-color: #fee2e2; }
        .disorder-card-new.ocd .disorder-icon-wrapper { background-color: #d1fae5; }
        .disorder-card-new.eating .disorder-icon-wrapper { background-color: #e0e7ff; }

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
            transform: translateY(-3px);
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
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
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
            transform: translateY(-5px);
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
            transition: all 0.3s ease;
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.1);
        }

        .resource-card:hover .resource-icon {
            transform: scale(1.05);
            box-shadow: 0 12px 30px rgba(0, 0, 0, 0.15);
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
            box-shadow: 0 8px 25px rgba(70, 130, 169, 0.3);
        }

        .contact {
            padding: 5rem 0;
            background: var(--gradient-bg);
        }

        .contact-card-new {
            display: grid;
            grid-template-columns: 1fr 2fr; /* Layout asimetris */
            background: var(--white);
            border-radius: 25px;
            box-shadow: var(--shadow-hover);
            overflow: hidden; /* Penting untuk menjaga border-radius */
            border: 1px solid #e5e7eb;
        }

        .contact-info-new {
            padding: 3rem;
            background: rgba(249, 250, 251, 0.5); /* Latar sedikit berbeda */
            border-right: 1px solid #e5e7eb;
            display: flex;
            flex-direction: column;
        }

        .contact-info-new h3 {
            font-size: 1.8rem;
            font-weight: 700;
            color: var(--text-dark);
            margin-bottom: 1rem;
        }

        .contact-info-new p {
            color: var(--text-gray);
            margin-bottom: 2rem;
            font-size: 1rem;
        }

        .contact-items-new {
            display: flex;
            flex-direction: column;
            gap: 2rem;
            margin-top: auto; /* Mendorong item ke bawah jika ada ruang */
        }

        .contact-item-new {
            display: flex;
            align-items: center;
            gap: 1rem;
        }

        .contact-icon-new {
            width: 48px;
            height: 48px;
            flex-shrink: 0;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            color: var(--white);
        }

        .contact-icon-new.email { background: var(--gradient-primary); }
        .contact-icon-new.phone { background: linear-gradient(135deg, var(--secondary), var(--accent)); }
        .contact-icon-new.location { background: linear-gradient(135deg, var(--accent), var(--primary)); }
        
        .contact-details-new h4 {
            font-weight: 600;
            color: var(--text-dark);
            font-size: 1rem;
            margin-bottom: 0.25rem;
        }

        .contact-details-new p {
            font-size: 0.95rem;
            color: var(--text-gray);
            margin: 0;
            line-height: 1.4;
        }
        
        .contact-form-new {
            padding: 3rem;
        }

        .contact-form-new h3 {
            font-size: 1.8rem;
            font-weight: 700;
            color: var(--text-dark);
            margin-bottom: 2rem;
        }
        
        .contact-form-new .form-group input,
        .contact-form-new .form-group textarea {
            background: var(--bg-light); /* Latar belakang input abu-abu */
            border: 2px solid var(--bg-light);
        }

        .contact-form-new .form-group input:focus,
        .contact-form-new .form-group textarea:focus {
            background: var(--white);
            border-color: var(--primary);
            box-shadow: 0 0 0 3px rgba(70, 130, 169, 0.1);
            transform: none; /* Hilangkan transform agar lebih stabil */
        }
        
        .btn-full-width {
            width: 100%;
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

        /* MEDIA QUERIES */
        @media (max-width: 1024px) {
            .disorders-grid-new {
                grid-template-columns: repeat(2, 1fr);
            }
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
            .disorders-grid-new {
                grid-template-columns: 1fr;
            }
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
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .fade-in-up { 
            animation: fadeInUp 0.6s ease-out;
            animation-fill-mode: both; 
        }
    </style>
        @php
            $user = Auth::user();
            $imageUrl = $user->image ? asset('storage/' . $user->image) : 'https://placehold.co/36x36/E2E8F0/A0AEC0?text=P';
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

            <!-- Foto profil (Struktur disederhanakan) -->
            <div class="profile-button">
                <a href="{{ route('profile') }}" class="profile-link">
                    <img class="profile-img" src="{{ $imageUrl }}" alt="Foto Profil">
                </a>
            </div>

            <!-- Tombol mobile menu -->
            <button class="mobile-menu-btn" onclick="toggleMobileMenu()">
                <span class="hamburger"></span>
            </button>
        </div>
        
        <!-- Mobile Nav disamakan dengan Desktop Nav -->
        <nav class="nav-mobile" id="mobileNav">
            <a href="/dashboard" class="nav-link-mobile">Dashboard</a>
            <a href="/posts" class="nav-link-mobile">Articles</a>
            <a href="/chat" class="nav-link-mobile">Chat</a>
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
                        <a href="#about" class="btn btn-primary">Pelajari Lebih Lanjut</a>
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
                    <div class="flex justify-center">
                    <img class="h-24 w-24 object-cover mb-4" src="{{asset('storage/emo.png')}}">
                    </div>
                    <h3>Kesejahteraan Emosional</h3>
                    <p>Mampu mengelola emosi dengan baik dan merasa puas dengan hidup</p>
                </div>
                <div class="sign-card">
                    <div class="flex justify-center">
                    <img class="h-24 w-24 object-cover mb-4" src="{{asset('storage/brain.png')}}">
                    </div>
                    <h3>Fungsi Kognitif Optimal</h3>
                    <p>Dapat berpikir jernih, berkonsentrasi, dan membuat keputusan dengan baik</p>
                </div>
                <div class="sign-card">
                    <div class="flex justify-center">
                    <img class="h-24 w-24 object-cover mb-4" src="{{asset('storage/sosial.png')}}">
                    </div>
                    <h3>Hubungan Sosial Sehat</h3>
                    <p>Mampu membangun dan mempertahankan hubungan yang bermakna</p>
                </div>
                <div class="sign-card">
                    <div class="flex justify-center">
                    <img class="h-24 w-24 object-cover mb-4" src="{{asset('storage/resilience.png')}}">
                    </div>
                    <h3>Resiliensi</h3>
                    <p>Kemampuan untuk bangkit dari kesulitan dan beradaptasi dengan perubahan</p>
                </div>
                <div class="sign-card">
                    <div class="flex justify-center">
                    <img class="h-24 w-24 object-cover mb-4" src="{{asset('storage/efficiency.png')}}">
                    </div>
                    <h3>Produktivitas</h3>
                    <p>Mampu berfungsi dengan baik dalam pekerjaan dan aktivitas sehari-hari</p>
                </div>
                <div class="sign-card">
                    <div class="flex justify-center">
                    <img class="h-24 w-24 object-cover mb-4" src="{{asset('storage/self.png')}}">
                    </div>
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
            
            <div class="disorders-grid-new">
                <!-- Card 1: Depresi -->
                <a href="{{ route('jenis.depresi') }}" class="disorder-card-new depression">
                    <div class="flex justify-center">
                    <img class="h-24 w-24 object-cover mb-4" src="{{asset('storage/depression.png')}}">
                    </div>
                    <h3>Depresi</h3>
                    <p>Perasaan sedih mendalam dan kehilangan minat yang mengganggu fungsi sehari-hari.</p>
                    <span class="disorder-link">Pelajari Lebih Lanjut →</span>
                </a>
                
                <!-- Card 2: Kecemasan -->
                <a href="{{ route('jenis.anxiety') }}" class="disorder-card-new anxiety">
                    <div class="flex justify-center">
                    <img class="h-24 w-24 object-cover mb-4" src="{{asset('storage/anxiety.png')}}">
                    </div>
                    <h3>Kecemasan</h3>
                    <p>Rasa khawatir, takut, atau gelisah berlebihan yang sulit dikendalikan.</p>
                    <span class="disorder-link">Pelajari Lebih Lanjut →</span>
                </a>
                
                <!-- Card 3: Bipolar -->
                <a href="{{ route('jenis.bipolar') }}" class="disorder-card-new bipolar">
                    <div class="flex justify-center">
                    <img class="h-24 w-24 object-cover mb-4" src="{{asset('storage/bipolar.png')}}">
                    </div>
                    <h3>Gangguan Bipolar</h3>
                    <p>Perubahan mood ekstrem antara episode mania (energi tinggi) dan depresi.</p>
                    <span class="disorder-link">Pelajari Lebih Lanjut →</span>
                </a>
                
                <!-- Card 4: PTSD -->
                <a href="{{ route('jenis.ptsd') }}" class="disorder-card-new ptsd">
                    <div class="flex justify-center">
                    <img class="h-24 w-24 object-cover mb-4" src="{{asset('storage/ptsd.png')}}">
                    </div>
                    <h3>PTSD</h3>
                    <p>Gangguan yang berkembang setelah mengalami atau menyaksikan peristiwa traumatis.</p>
                    <span class="disorder-link">Pelajari Lebih Lanjut →</span>
                </a>
                
                <!-- Card 5: OCD -->
                <a href="{{ route('jenis.ocd') }}" class="disorder-card-new ocd">
                    <div class="flex justify-center">
                    <img class="h-24 w-24 object-cover mb-4" src="{{asset('storage/personality.png')}}">
                    </div>
                    <h3>OCD</h3>
                    <p>Pikiran obsesif dan perilaku kompulsif yang dilakukan berulang kali.</p>
                    <span class="disorder-link">Pelajari Lebih Lanjut →</span>
                </a>
                
                <!-- Card 6: Gangguan Makan -->
                <a href="{{ route('jenis.gangguan') }}" class="disorder-card-new eating">
                    <div class="flex justify-center">
                    <img class="h-24 w-24 object-cover mb-4" src="{{asset('storage/eating.png')}}">
                    </div>
                    <h3>Gangguan Makan</h3>
                    <p>Pola makan tidak sehat dan obsesi berlebih terhadap berat dan citra tubuh.</p>
                    <span class="disorder-link">Pelajari Lebih Lanjut →</span>
                </a>
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
                <p>Informasi ini bersifat edukatif dan bukan pengganti diagnosis medis. Jika Anda merasa mengalami gejala, sangat disarankan untuk berkonsultasi dengan profesional kesehatan mental.</p>
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
                    <div class="flex justify-center">
                    <img class="h-24 w-24 object-cover mb-4" src="{{asset('storage/newspaper.png')}}">
                    </div>
                    <h3>Artikel Motivasi</h3>
                    <p>Kumpulan artikel edukatif tentang kesehatan mental yang memotivasi</p>
                    <a href="/posts" class="resource-link">Jelajahi 📈</a>
                </div>
                <div class="resource-card">
                    <div class="flex justify-center">
                    <img class="h-24 w-24 object-cover mb-4" src="{{asset('storage/doctor.png')}}">
                    </div>
                    <h3>Konsultasi</h3>
                    <p>Strategi praktis untuk menjaga dan meningkatkan kesehatan mental sehari-hari</p>
                    <a href="/chat" class="resource-link">Mulai Chat 💬</a>
                </div>
            </div>
        </div>
    </section>

    <section id="contact" class="contact">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">Hubungi Kami</h2>
                <p class="section-subtitle">Punya pertanyaan atau butuh dukungan? Kami di sini untuk Anda.</p>
            </div>
            
            <div class="contact-card-new">
                <!-- Kolom Informasi Kontak -->
                <div class="contact-info-new">
                    <h3>Informasi Kontak</h3>
                    <p>Kami siap mendengarkan. Hubungi kami melalui salah satu cara di bawah ini.</p>
                    <div class="contact-items-new">
                        <div class="contact-item-new">
                            <div class="contact-icon-new email">📧</div>
                            <div class="contact-details-new">
                                <h4>Email</h4>
                                <p>info@senandika.com</p>
                            </div>
                        </div>
                        <div class="contact-item-new">
                            <div class="contact-icon-new phone">📞</div>
                            <div class="contact-details-new">
                                <h4>Telepon</h4>
                                <p>+62 21 1234 5678</p>
                            </div>
                        </div>
                        <div class="contact-item-new">
                            <div class="contact-icon-new location">📍</div>
                            <div class="contact-details-new">
                                <h4>Alamat</h4>
                                <p>Jl. Edukasi No. 123, Jakarta</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Kolom Formulir -->
                <div class="contact-form-new">
                    <h3>Kirim Pesan Langsung</h3>
                    <form>
                        <div class="form-group">
                            <label for="name">Nama Lengkap</label>
                            <input type="text" id="name" name="name" placeholder="Masukkan nama Anda" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" id="email" name="email" placeholder="Masukkan email Anda" required>
                        </div>
                        <div class="form-group">
                            <label for="message">Pesan Anda</label>
                            <textarea id="message" name="message" rows="5" placeholder="Tulis pesan Anda di sini..." required></textarea>
                        </div>
                            <button type="submit" class="btn btn-primary btn-full-width">Kirim Pesan</button>
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
            // Fungsi untuk smooth scrolling pada link anchor (misal: tombol di hero)
            const anchorLinks = document.querySelectorAll('a[href^="#"]');
            
            anchorLinks.forEach(link => {
                link.addEventListener('click', function(e) {
                    e.preventDefault();
                    
                    const targetId = this.getAttribute('href');
                    const targetSection = document.querySelector(targetId);
                    
                    if (targetSection) {
                        targetSection.scrollIntoView({
                            behavior: 'smooth',
                            block: 'start'
                        });
                    }
                    
                    // Menutup menu mobile setelah link diklik
                    const mobileNav = document.getElementById('mobileNav');
                    if (mobileNav.classList.contains('active')) {
                        toggleMobileMenu();
                    }
                });
            });
            
            // FUNGSI ANIMASI SAAT SCROLL TELAH DIHAPUS.

            // Memperbaiki selector formulir kontak agar sesuai dengan desain baru
            const contactForm = document.querySelector('.contact-form-new form');
            if (contactForm) {
                contactForm.addEventListener('submit', function(e) {
                    e.preventDefault();
                    
                    const formData = new FormData(this);
                    const name = formData.get('name');
                    const email = formData.get('email');
                    
                    if (!name || !email) {
                        alert('Mohon lengkapi nama dan email.');
                        return;
                    }
                    
                    const submitBtn = this.querySelector('button[type="submit"]');
                    const originalText = submitBtn.textContent;
                    
                    submitBtn.textContent = 'Mengirim...';
                    submitBtn.disabled = true;
                    
                    // Simulasi pengiriman form
                    setTimeout(() => {
                        alert('Pesan Anda telah berhasil dikirim! Kami akan segera merespons.');
                        this.reset();
                        submitBtn.textContent = originalText;
                        submitBtn.disabled = false;
                    }, 1500);
                });
            }
        });
    </script>
</body>
</html>