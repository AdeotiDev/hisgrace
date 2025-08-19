<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HisGrace Schools - Where Learning is Joyful</title>

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&family=Quicksand:wght@500;700&display=swap"
        rel="stylesheet">

    <!-- Font Awesome for Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- AOS Animation Library -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <style>
        :root {
            --primary-color: #4361ee;
            --secondary-color: #3f37c9;
            --accent-color: #f72585;
            --light-color: #f8f9fa;
            --dark-color: #212529;
            --success-color: #4cc9f0;
            --warning-color: #f77f00;
            --info-color: #7209b7;
            --yellow: #ffbe0b;
            --green: #8ac926;
            --orange: #ff9e00;
            --purple: #b5179e;
            --pink: #f72585;
            --blue: #4361ee;
            --transition: all 0.3s ease;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Nunito', sans-serif;
            color: var(--dark-color);
            line-height: 1.6;
            overflow-x: hidden;
            background-color: #ffffff;
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-family: 'Quicksand', sans-serif;
            font-weight: 700;
            line-height: 1.2;
            margin-bottom: 1rem;
        }

        .container {
            width: 100%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 2rem;
        }

        /* Header Styles */
        header {
            background-color: white;
            box-shadow: 0 2px 15px rgba(0, 0, 0, 0.08);
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 1000;
            transition: var(--transition);
        }

        .header-top {
            background: linear-gradient(90deg, var(--primary-color), var(--secondary-color));
            color: white;
            padding: 0.5rem 0;
            font-size: 0.9rem;
        }

        .header-top .container {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .contact-info span {
            margin-right: 1.5rem;
        }

        .social-links a {
            color: white;
            margin-left: 1rem;
            transition: var(--transition);
            font-size: 1.1rem;
        }

        .social-links a:hover {
            color: var(--yellow);
            transform: scale(1.2);
        }

        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 1rem 0;
        }

        .logo {
            display: flex;
            align-items: center;
        }

        .logo img {
            height: 60px;
            margin-right: 1rem;
            border-radius: 50%;
            border: 3px solid var(--primary-color);
        }

        .logo h1 {
            font-size: 1.8rem;
            background: linear-gradient(45deg, var(--primary-color), var(--accent-color));
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
            margin-bottom: 0;
        }

        .logo span {
            color: var(--accent-color);
        }

        .nav-links {
            display: flex;
            list-style: none;
        }

        .nav-links li {
            margin-left: 2rem;
        }

        .nav-links a {
            text-decoration: none;
            color: var(--dark-color);
            font-weight: 600;
            position: relative;
            transition: var(--transition);
            font-size: 1rem;
            cursor: pointer;
        }

        .nav-links a::after {
            content: '';
            position: absolute;
            bottom: -5px;
            left: 0;
            width: 0;
            height: 3px;
            background: linear-gradient(90deg, var(--primary-color), var(--accent-color));
            transition: var(--transition);
        }

        .nav-links a:hover::after {
            width: 100%;
        }

        .nav-links a:hover {
            color: var(--primary-color);
        }

        .mobile-menu-btn {
            display: none;
            background: none;
            border: none;
            font-size: 1.5rem;
            cursor: pointer;
            color: var(--primary-color);
        }

        /* Hero Section */
        .hero {
            height: 100vh;
            background: linear-gradient(rgba(255, 255, 255, 0.8), rgba(255, 255, 255, 0.8)), url('https://images.unsplash.com/photo-1503676260728-1c00da094a0b?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80') center/cover no-repeat;
            display: flex;
            align-items: center;
            position: relative;
            overflow: hidden;
        }

        .hero::before {
            content: '';
            position: absolute;
            top: -50px;
            right: -50px;
            width: 300px;
            height: 300px;
            border-radius: 50%;
            background: linear-gradient(45deg, rgba(67, 97, 238, 0.1), rgba(247, 37, 133, 0.1));
            z-index: -1;
        }

        .hero::after {
            content: '';
            position: absolute;
            bottom: -100px;
            left: -100px;
            width: 400px;
            height: 400px;
            border-radius: 50%;
            background: linear-gradient(45deg, rgba(255, 190, 11, 0.1), rgba(76, 201, 240, 0.1));
            z-index: -1;
        }

        .hero-content {
            max-width: 800px;
            z-index: 1;
        }

        .hero-content h2 {
            font-size: 3.5rem;
            margin-bottom: 1.5rem;
            color: var(--primary-color);
            animation: bounceIn 1s ease;
        }

        .hero-content p {
            font-size: 1.3rem;
            margin-bottom: 2rem;
            color: var(--dark-color);
            animation: fadeInUp 1s ease 0.2s;
            animation-fill-mode: both;
        }

        .btn {
            display: inline-block;
            padding: 0.8rem 2rem;
            background: linear-gradient(45deg, var(--primary-color), var(--secondary-color));
            color: white;
            text-decoration: none;
            border-radius: 50px;
            font-weight: 600;
            transition: var(--transition);
            border: none;
            margin-right: 1rem;
            margin-bottom: 1rem;
            box-shadow: 0 4px 15px rgba(67, 97, 238, 0.3);
            animation: fadeInUp 1s ease 0.4s;
            animation-fill-mode: both;
            cursor: pointer;
        }

        .btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 7px 20px rgba(67, 97, 238, 0.4);
        }

        .btn-outline {
            background: transparent;
            color: var(--primary-color);
            border: 2px solid var(--primary-color);
            box-shadow: none;
        }

        .btn-outline:hover {
            background: var(--primary-color);
            color: white;
            box-shadow: 0 7px 20px rgba(67, 97, 238, 0.4);
        }

        /* Floating Elements */
        .floating-element {
            position: absolute;
            border-radius: 50%;
            opacity: 0.7;
            z-index: 0;
        }

        .floating-element:nth-child(1) {
            top: 10%;
            right: 10%;
            width: 80px;
            height: 80px;
            background: var(--yellow);
            animation: float 6s ease-in-out infinite;
        }

        .floating-element:nth-child(2) {
            bottom: 15%;
            right: 20%;
            width: 60px;
            height: 60px;
            background: var(--green);
            animation: float 7s ease-in-out infinite 1s;
        }

        .floating-element:nth-child(3) {
            top: 30%;
            left: 5%;
            width: 70px;
            height: 70px;
            background: var(--pink);
            animation: float 8s ease-in-out infinite 0.5s;
        }

        .floating-element:nth-child(4) {
            bottom: 20%;
            left: 15%;
            width: 50px;
            height: 50px;
            background: var(--blue);
            animation: float 9s ease-in-out infinite 1.5s;
        }

        /* Welcome Section */
        .welcome {
            padding: 5rem 0;
            background-color: var(--light-color);
            position: relative;
            overflow: hidden;
        }

        .section-title {
            text-align: center;
            margin-bottom: 3rem;
        }

        .section-title h2 {
            font-size: 2.8rem;
            background: linear-gradient(45deg, var(--primary-color), var(--accent-color));
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
            position: relative;
            display: inline-block;
        }

        .section-title h2::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
            width: 100px;
            height: 4px;
            background: linear-gradient(90deg, var(--yellow), var(--green));
            border-radius: 10px;
        }

        .welcome-content {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 3rem;
            align-items: center;
        }

        .welcome-text h3 {
            font-size: 2.2rem;
            color: var(--secondary-color);
            margin-bottom: 1rem;
        }

        .welcome-text p {
            margin-bottom: 1.5rem;
            font-size: 1.1rem;
        }

        .welcome-image {
            position: relative;
            overflow: hidden;
            border-radius: 20px;
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
            transform: rotate(2deg);
            transition: var(--transition);
        }

        .welcome-image:hover {
            transform: rotate(0deg);
        }

        .welcome-image img {
            width: 100%;
            height: auto;
            transition: transform 0.5s ease;
        }

        .welcome-image:hover img {
            transform: scale(1.05);
        }

        /* Age Groups Section */
        .age-groups {
            padding: 5rem 0;
            background: white;
        }

        .age-groups-container {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 1.5rem;
        }

        .age-card {
            background: white;
            border-radius: 20px;
            padding: 2rem 1.5rem;
            text-align: center;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.05);
            transition: var(--transition);
            position: relative;
            overflow: hidden;
            border: 2px solid transparent;
            cursor: pointer;
        }

        .age-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 5px;
            background: linear-gradient(90deg, var(--primary-color), var(--accent-color));
        }

        .age-card:nth-child(2)::before {
            background: linear-gradient(90deg, var(--yellow), var(--orange));
        }

        .age-card:nth-child(3)::before {
            background: linear-gradient(90deg, var(--green), var(--info-color));
        }

        .age-card:nth-child(4)::before {
            background: linear-gradient(90deg, var(--pink), var(--purple));
        }

        .age-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.1);
        }

        .age-icon {
            width: 80px;
            height: 80px;
            margin: 0 auto 1.5rem;
            background: linear-gradient(45deg, var(--primary-color), var(--secondary-color));
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 2rem;
        }

        .age-card:nth-child(2) .age-icon {
            background: linear-gradient(45deg, var(--yellow), var(--orange));
        }

        .age-card:nth-child(3) .age-icon {
            background: linear-gradient(45deg, var(--green), var(--info-color));
        }

        .age-card:nth-child(4) .age-icon {
            background: linear-gradient(45deg, var(--pink), var(--purple));
        }

        .age-card h3 {
            font-size: 1.5rem;
            margin-bottom: 1rem;
            color: var(--dark-color);
        }

        .age-card p {
            margin-bottom: 1.5rem;
        }

        /* Programs Section */
        .programs {
            padding: 5rem 0;
            background-color: var(--light-color);
        }

        .programs-container {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 2rem;
        }

        .program-card {
            background: white;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.05);
            transition: var(--transition);
            cursor: pointer;
        }

        .program-card:hover {
            transform: translateY(-15px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
        }

        .card-image {
            height: 200px;
            overflow: hidden;
            position: relative;
        }

        .card-image::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.3));
        }

        .card-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }

        .program-card:hover .card-image img {
            transform: scale(1.1);
        }

        .card-content {
            padding: 1.5rem;
        }

        .card-content h3 {
            color: var(--primary-color);
            margin-bottom: 1rem;
            font-size: 1.5rem;
        }

        .card-content p {
            margin-bottom: 1.5rem;
        }

        .program-tag {
            display: inline-block;
            padding: 0.3rem 0.8rem;
            border-radius: 20px;
            font-size: 0.8rem;
            font-weight: 600;
            margin-right: 0.5rem;
            margin-bottom: 0.5rem;
        }

        .tag-academic {
            background-color: rgba(67, 97, 238, 0.1);
            color: var(--primary-color);
        }

        .tag-creative {
            background-color: rgba(247, 37, 133, 0.1);
            color: var(--pink);
        }

        .tag-sports {
            background-color: rgba(255, 190, 11, 0.1);
            color: var(--warning-color);
        }

        /* Fun Facts Section */
        .fun-facts {
            padding: 5rem 0;
            background: linear-gradient(135deg, rgba(67, 97, 238, 0.05), rgba(247, 37, 133, 0.05));
        }

        .fun-facts-container {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 2rem;
        }

        .fun-fact {
            background: white;
            border-radius: 20px;
            padding: 2rem;
            text-align: center;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.05);
            transition: var(--transition);
            position: relative;
            overflow: hidden;
        }

        .fun-fact::before {
            content: '';
            position: absolute;
            top: -50px;
            right: -50px;
            width: 100px;
            height: 100px;
            border-radius: 50%;
            background: linear-gradient(45deg, rgba(67, 97, 238, 0.1), rgba(247, 37, 133, 0.1));
        }

        .fun-fact:hover {
            transform: translateY(-10px);
        }

        .fun-fact i {
            font-size: 2.5rem;
            margin-bottom: 1rem;
            background: linear-gradient(45deg, var(--primary-color), var(--accent-color));
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
        }

        .fun-fact h3 {
            font-size: 2.5rem;
            margin-bottom: 0.5rem;
            background: linear-gradient(45deg, var(--primary-color), var(--accent-color));
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
        }

        /* Activities Section */
        .activities {
            padding: 5rem 0;
            background-color: white;
        }

        .activities-container {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 3rem;
        }

        .activity {
            display: flex;
            align-items: flex-start;
            gap: 1.5rem;
            background: linear-gradient(135deg, rgba(67, 97, 238, 0.05), rgba(247, 37, 133, 0.05));
            padding: 2rem;
            border-radius: 20px;
            transition: var(--transition);
            cursor: pointer;
        }

        .activity:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.05);
        }

        .activity-icon {
            background: linear-gradient(45deg, var(--primary-color), var(--secondary-color));
            color: white;
            width: 60px;
            height: 60px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            flex-shrink: 0;
        }

        .activity:nth-child(even) .activity-icon {
            background: linear-gradient(45deg, var(--yellow), var(--orange));
        }

        .activity-content h3 {
            color: var(--secondary-color);
            margin-bottom: 0.5rem;
            font-size: 1.5rem;
        }

        /* Testimonials Section */
        .testimonials {
            padding: 5rem 0;
            background: linear-gradient(135deg, rgba(67, 97, 238, 0.9), rgba(247, 37, 133, 0.9));
            color: white;
            position: relative;
            overflow: hidden;
        }

        .testimonials::before {
            content: '';
            position: absolute;
            top: -100px;
            right: -100px;
            width: 300px;
            height: 300px;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.1);
        }

        .testimonials::after {
            content: '';
            position: absolute;
            bottom: -100px;
            left: -100px;
            width: 300px;
            height: 300px;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.1);
        }

        .testimonials-container {
            max-width: 800px;
            margin: 0 auto;
            text-align: center;
            position: relative;
            z-index: 1;
        }

        .testimonial {
            display: none;
        }

        .testimonial.active {
            display: block;
            animation: fadeIn 1s ease;
        }

        .testimonial-text {
            font-size: 1.3rem;
            font-style: italic;
            margin-bottom: 2rem;
            position: relative;
        }

        .testimonial-text::before {
            content: '"';
            font-size: 5rem;
            position: absolute;
            top: -2rem;
            left: -2rem;
            color: var(--yellow);
            opacity: 0.7;
        }

        .testimonial-author {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 1rem;
        }

        .author-image {
            width: 70px;
            height: 70px;
            border-radius: 50%;
            overflow: hidden;
            border: 3px solid var(--yellow);
        }

        .author-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .author-info h4 {
            margin-bottom: 0.2rem;
            font-size: 1.2rem;
        }

        .testimonial-nav {
            display: flex;
            justify-content: center;
            margin-top: 2rem;
            gap: 0.8rem;
        }

        .nav-dot {
            width: 15px;
            height: 15px;
            border-radius: 50%;
            background-color: rgba(255, 255, 255, 0.3);
            cursor: pointer;
            transition: var(--transition);
        }

        .nav-dot.active {
            background-color: var(--yellow);
            transform: scale(1.2);
        }

        /* Gallery Section */
        .gallery {
            padding: 5rem 0;
            background-color: var(--light-color);
        }

        .gallery-container {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 1rem;
        }

        .gallery-item {
            height: 200px;
            overflow: hidden;
            border-radius: 15px;
            position: relative;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
            transition: var(--transition);
            cursor: pointer;
        }

        .gallery-item:hover {
            transform: scale(1.03);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.15);
        }

        .gallery-item img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }

        .gallery-item:hover img {
            transform: scale(1.1);
        }

        .gallery-item:nth-child(1) {
            grid-column: span 2;
            grid-row: span 2;
        }

        .gallery-item:nth-child(4) {
            grid-row: span 2;
        }

        .gallery-overlay {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            padding: 1rem;
            background: linear-gradient(transparent, rgba(0, 0, 0, 0.7));
            color: white;
            transform: translateY(100%);
            transition: var(--transition);
        }

        .gallery-item:hover .gallery-overlay {
            transform: translateY(0);
        }

        /* CTA Section */
        .cta {
            padding: 5rem 0;
            background: linear-gradient(135deg, rgba(67, 97, 238, 0.9), rgba(247, 37, 133, 0.9)), url('https://images.unsplash.com/photo-1503676260728-1c00da094a0b?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80') center/cover no-repeat;
            color: white;
            text-align: center;
            position: relative;
        }

        .cta::before {
            content: '';
            position: absolute;
            top: -50px;
            right: 10%;
            width: 100px;
            height: 100px;
            border-radius: 50%;
            background: var(--yellow);
            opacity: 0.2;
            animation: float 6s ease-in-out infinite;
        }

        .cta::after {
            content: '';
            position: absolute;
            bottom: -50px;
            left: 10%;
            width: 150px;
            height: 150px;
            border-radius: 50%;
            background: var(--green);
            opacity: 0.2;
            animation: float 7s ease-in-out infinite 1s;
        }

        .cta h2 {
            font-size: 2.8rem;
            margin-bottom: 1.5rem;
            position: relative;
            z-index: 1;
        }

        .cta p {
            max-width: 700px;
            margin: 0 auto 2rem;
            font-size: 1.2rem;
            position: relative;
            z-index: 1;
        }

        /* Footer */
        footer {
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            color: white;
            padding: 4rem 0 1rem;
        }

        .footer-container {
            display: grid;
            grid-template-columns: 2fr 1fr 1fr 1fr;
            gap: 2rem;
            margin-bottom: 3rem;
        }

        .footer-about h3 {
            color: white;
            margin-bottom: 1rem;
            position: relative;
            padding-bottom: 0.5rem;
            font-size: 1.5rem;
        }

        .footer-about h3::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 50px;
            height: 3px;
            background-color: var(--yellow);
        }

        .footer-about p {
            margin-bottom: 1.5rem;
            opacity: 0.9;
        }

        .footer-links h3 {
            color: white;
            margin-bottom: 1rem;
            position: relative;
            padding-bottom: 0.5rem;
            font-size: 1.5rem;
        }

        .footer-links h3::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 50px;
            height: 3px;
            background-color: var(--yellow);
        }

        .footer-links ul {
            list-style: none;
        }

        .footer-links li {
            margin-bottom: 0.8rem;
        }

        .footer-links a {
            color: rgba(255, 255, 255, 0.8);
            text-decoration: none;
            transition: var(--transition);
            display: inline-block;
            cursor: pointer;
        }

        .footer-links a:hover {
            color: var(--yellow);
            transform: translateX(5px);
        }

        .footer-contact h3 {
            color: white;
            margin-bottom: 1rem;
            position: relative;
            padding-bottom: 0.5rem;
            font-size: 1.5rem;
        }

        .footer-contact h3::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 50px;
            height: 3px;
            background-color: var(--yellow);
        }

        .contact-item {
            display: flex;
            align-items: flex-start;
            margin-bottom: 1rem;
        }

        .contact-item i {
            color: var(--yellow);
            margin-right: 1rem;
            margin-top: 0.3rem;
            font-size: 1.2rem;
        }

        .footer-gallery h3 {
            color: white;
            margin-bottom: 1rem;
            position: relative;
            padding-bottom: 0.5rem;
            font-size: 1.5rem;
        }

        .footer-gallery h3::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 50px;
            height: 3px;
            background-color: var(--yellow);
        }

        .gallery-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 0.5rem;
        }

        .gallery-item-small {
            height: 70px;
            overflow: hidden;
            border-radius: 8px;
            transition: var(--transition);
            cursor: pointer;
        }

        .gallery-item-small:hover {
            transform: scale(1.05);
        }

        .gallery-item-small img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .copyright {
            text-align: center;
            padding-top: 2rem;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            font-size: 0.9rem;
            color: rgba(255, 255, 255, 0.7);
        }

        /* Modal Styles */
        .modal {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.7);
            z-index: 2000;
            overflow-y: auto;
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .modal.show {
            display: flex;
            align-items: center;
            justify-content: center;
            opacity: 1;
        }

        .modal-content {
            background-color: white;
            border-radius: 20px;
            width: 90%;
            max-width: 800px;
            max-height: 90vh;
            overflow-y: auto;
            position: relative;
            transform: scale(0.7);
            transition: transform 0.3s ease;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
        }

        .modal.show .modal-content {
            transform: scale(1);
        }

        .modal-header {
            padding: 1.5rem;
            border-bottom: 1px solid rgba(0, 0, 0, 0.1);
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .modal-header h2 {
            margin: 0;
            color: var(--primary-color);
        }

        .modal-close {
            background: none;
            border: none;
            font-size: 1.5rem;
            cursor: pointer;
            color: var(--dark-color);
            transition: var(--transition);
        }

        .modal-close:hover {
            color: var(--accent-color);
            transform: rotate(90deg);
        }

        .modal-body {
            padding: 1.5rem;
        }

        /* Navigation Drawer Styles */
        .nav-drawer {
            position: fixed;
            top: 0;
            right: -350px;
            width: 350px;
            height: 100%;
            background-color: white;
            box-shadow: -5px 0 15px rgba(0, 0, 0, 0.1);
            z-index: 2001;
            transition: right 0.3s ease;
            overflow-y: auto;
        }

        .nav-drawer.open {
            right: 0;
        }

        .drawer-header {
            padding: 1.5rem;
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            color: white;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .drawer-header h3 {
            margin: 0;
        }

        .drawer-close {
            background: none;
            border: none;
            font-size: 1.5rem;
            cursor: pointer;
            color: white;
            transition: var(--transition);
        }

        .drawer-close:hover {
            transform: rotate(90deg);
        }

        .drawer-content {
            padding: 1.5rem;
        }

        .drawer-menu {
            list-style: none;
        }

        .drawer-menu li {
            margin-bottom: 1rem;
        }

        .drawer-menu a {
            display: flex;
            align-items: center;
            padding: 0.8rem 1rem;
            border-radius: 10px;
            text-decoration: none;
            color: var(--dark-color);
            font-weight: 600;
            transition: var(--transition);
        }

        .drawer-menu a:hover {
            background-color: rgba(67, 97, 238, 0.1);
            color: var(--primary-color);
        }

        .drawer-menu i {
            margin-right: 1rem;
            font-size: 1.2rem;
            width: 24px;
            text-align: center;
        }

        /* Bottom Sheet Styles */
        .bottom-sheet {
            position: fixed;
            bottom: -100%;
            left: 0;
            width: 100%;
            background-color: white;
            border-radius: 20px 20px 0 0;
            box-shadow: 0 -5px 15px rgba(0, 0, 0, 0.1);
            z-index: 2001;
            transition: bottom 0.3s ease;
            max-height: 80vh;
            overflow-y: auto;
        }

        .bottom-sheet.open {
            bottom: 0;
        }

        .sheet-header {
            padding: 1rem;
            display: flex;
            justify-content: center;
            align-items: center;
            border-bottom: 1px solid rgba(0, 0, 0, 0.1);
        }

        .sheet-handle {
            width: 50px;
            height: 5px;
            background-color: rgba(0, 0, 0, 0.2);
            border-radius: 5px;
            cursor: pointer;
        }

        .sheet-title {
            padding: 1rem 1.5rem;
            border-bottom: 1px solid rgba(0, 0, 0, 0.1);
        }

        .sheet-title h3 {
            margin: 0;
            color: var(--primary-color);
        }

        .sheet-content {
            padding: 1.5rem;
        }

        /* Form Styles */
        .form-group {
            margin-bottom: 1.5rem;
        }

        .form-group label {
            display: block;
            margin-bottom: 0.5rem;
            font-weight: 600;
            color: var(--dark-color);
        }

        .form-control {
            width: 100%;
            padding: 0.8rem 1rem;
            border: 2px solid rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            font-family: 'Nunito', sans-serif;
            font-size: 1rem;
            transition: var(--transition);
        }

        .form-control:focus {
            outline: none;
            border-color: var(--primary-color);
            box-shadow: 0 0 0 3px rgba(67, 97, 238, 0.1);
        }

        textarea.form-control {
            resize: vertical;
            min-height: 120px;
        }

        .form-row {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 1rem;
        }

        /* Animations */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }

        @keyframes bounceIn {
            0% {
                opacity: 0;
                transform: scale(0.3);
            }

            50% {
                opacity: 1;
                transform: scale(1.05);
            }

            70% {
                transform: scale(0.9);
            }

            100% {
                opacity: 1;
                transform: scale(1);
            }
        }

        @keyframes float {
            0% {
                transform: translateY(0px);
            }

            50% {
                transform: translateY(-20px);
            }

            100% {
                transform: translateY(0px);
            }
        }

        /* Responsive Styles */
        @media (max-width: 992px) {
            .fun-facts-container {
                grid-template-columns: repeat(2, 1fr);
            }

            .programs-container,
            .activities-container {
                grid-template-columns: 1fr;
            }

            .gallery-container {
                grid-template-columns: repeat(2, 1fr);
            }

            .gallery-item:nth-child(1) {
                grid-column: span 1;
                grid-row: span 1;
            }

            .gallery-item:nth-child(4) {
                grid-row: span 1;
            }

            .footer-container {
                grid-template-columns: 1fr 1fr;
            }
        }

        @media (max-width: 768px) {
            .nav-links {
                display: none;
            }

            .mobile-menu-btn {
                display: block;
            }

            .hero-content h2 {
                font-size: 2.5rem;
            }

            .welcome-content {
                grid-template-columns: 1fr;
            }

            .age-groups-container {
                grid-template-columns: repeat(2, 1fr);
            }

            .fun-facts-container {
                grid-template-columns: 1fr;
            }

            .gallery-container {
                grid-template-columns: 1fr;
            }

            .footer-container {
                grid-template-columns: 1fr;
            }

            .form-row {
                grid-template-columns: 1fr;
            }

            .modal-content {
                width: 95%;
                border-radius: 15px 15px 0 0;
                position: fixed;
                bottom: 0;
                left: 0;
                right: 0;
                max-height: 90vh;
                max-width: none;
                transform: translateY(100%);
            }

            .modal.show .modal-content {
                transform: translateY(0);
            }
        }
    </style>
</head>

<body>
    <!-- Header -->
    <header>
        <div class="header-top">
            <div class="container">
                <div class="contact-info">
                    <span><i class="fas fa-phone"></i> 09075975835, 08185648398</span>
                    <span><i class="fas fa-envelope"></i> info@hisgraceschools.com</span>
                </div>
                <div class="social-links">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
        </div>
        <div class="container">
            <nav class="navbar">
                <div class="logo">
                    <img src="{{asset('school-images/hgs-logo.webp')}}"
                        alt="HisGrace Schools Logo">
                    <h1>HisGrace<span> Schools</span></h1>
                </div>
                <ul class="nav-links">
                    <li><a href="#" class="nav-link" data-page="home">Home</a></li>
                    <li><a href="#" class="nav-link" data-page="about">About</a></li>
                    <li><a href="#" class="nav-link" data-page="programs">Programs</a></li>
                    <li><a href="#" class="nav-link" data-page="admissions">Admissions</a></li>
                    <li><a href="#" class="nav-link" data-page="facilities">Facilities</a></li>
                    <li><a href="#" class="nav-link" data-page="gallery">Gallery</a></li>
                    <li><a href="#" class="nav-link" data-page="contact">Contact</a></li>
                    <li><a href="https://hisgracegroupofschools.com.ng/student/login" target="_blank">Student Portal</a>
                    </li>
                </ul>
                <button class="mobile-menu-btn" id="mobileMenuBtn">
                    <i class="fas fa-bars"></i>
                </button>
            </nav>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="hero">
        <div class="floating-element"></div>
        <div class="floating-element"></div>
        <div class="floating-element"></div>
        <div class="floating-element"></div>
        <div class="container">
            <div class="hero-content">
                <h2>Where Learning is Joyful!</h2>
                <p>Nurturing young minds from age 2 to 16 with creativity, curiosity, and character-building in a
                    vibrant, supportive environment.</p>
                <button class="btn" id="joinFamilyBtn">Join Our Family</button>
                <button class="btn btn-outline" id="scheduleVisitBtn">Schedule a Visit</button>
            </div>
        </div>
    </section>

    <!-- Welcome Section -->
    <section class="welcome">
        <div class="container">
            <div class="section-title" data-aos="fade-up">
                <h2>Welcome to HisGrace Schools</h2>
            </div>
            <div class="welcome-content">
                <div class="welcome-text" data-aos="fade-right">
                    <h3>A Place Where Every Child Shines</h3>
                    <p>At HisGrace Schools, we believe education should be an exciting adventure! Our colorful
                        classrooms and passionate teachers create a nurturing environment where children from age 2 to
                        16 can explore, discover, and grow.</p>
                    <p>We blend academic excellence with creative play, helping each child develop their unique talents
                        while building strong character and values. Our approach makes learning joyful and memorable!
                    </p>
                    <button class="btn" id="discoverStoryBtn">Discover Our Story</button>
                </div>
                <div class="welcome-image" data-aos="fade-left">
                    <img src="{{asset('school-images/hgs4.webp')}}"
                        alt="Happy students at HisGrace Schools">
                </div>
            </div>
        </div>
    </section>

    <!-- Age Groups Section -->
    <section class="age-groups">
        <div class="container">
            <div class="section-title" data-aos="fade-up">
                <h2>Programs for Every Age</h2>
            </div>
            <div class="age-groups-container">
                <div class="age-card" data-aos="fade-up" data-aos-delay="100" data-age="early-years">
                    <div class="age-icon">
                        <i class="fas fa-baby"></i>
                    </div>
                    <h3>Early Years (2-5)</h3>
                    <p>Play-based learning that nurtures curiosity and builds foundational skills through fun activities
                        and exploration.</p>
                    <button class="btn" style="padding: 0.5rem 1.5rem; font-size: 0.9rem;">Learn More</button>
                </div>
                <div class="age-card" data-aos="fade-up" data-aos-delay="200" data-age="primary">
                    <div class="age-icon">
                        <i class="fas fa-child"></i>
                    </div>
                    <h3>Primary (6-11)</h3>
                    <p>Building strong academic foundations while encouraging creativity, critical thinking, and social
                        development.</p>
                    <button class="btn" style="padding: 0.5rem 1.5rem; font-size: 0.9rem;">Learn More</button>
                </div>
                <div class="age-card" data-aos="fade-up" data-aos-delay="300" data-age="junior-secondary">
                    <div class="age-icon">
                        <i class="fas fa-user-graduate"></i>
                    </div>
                    <h3>Junior Secondary (12-14)</h3>
                    <p>Expanding knowledge horizons with project-based learning and leadership opportunities in a
                        supportive environment.</p>
                    <button class="btn" style="padding: 0.5rem 1.5rem; font-size: 0.9rem;">Learn More</button>
                </div>
                <div class="age-card" data-aos="fade-up" data-aos-delay="400" data-age="senior-secondary">
                    <div class="age-icon">
                        <i class="fas fa-graduation-cap"></i>
                    </div>
                    <h3>Senior Secondary (15-16)</h3>
                    <p>Preparing for future success with specialized programs, career guidance, and advanced academic
                        opportunities.</p>
                    <button class="btn" style="padding: 0.5rem 1.5rem; font-size: 0.9rem;">Learn More</button>
                </div>
            </div>
        </div>
    </section>

    <!-- Programs Section -->
    <section class="programs">
        <div class="container">
            <div class="section-title" data-aos="fade-up">
                <h2>Exciting Learning Programs</h2>
            </div>
            <div class="programs-container">
                <div class="program-card" data-aos="fade-up" data-aos-delay="100" data-program="stem">
                    <div class="card-image">
                        <img src="{{asset('school-images/hgs1.webp')}}"
                            alt="STEM Program">
                    </div>
                    <div class="card-content">
                        <h3>STEM Explorers</h3>
                        <p>Hands-on science, technology, engineering, and math activities that make learning exciting
                            and relevant.</p>
                        <div>
                            <span class="program-tag tag-academic">Academic</span>
                            <span class="program-tag tag-creative">Creative</span>
                        </div>
                    </div>
                </div>
                <div class="program-card" data-aos="fade-up" data-aos-delay="200" data-program="arts">
                    <div class="card-image">
                        <img src="{{asset('school-images/hgs2.webp')}}"
                            alt="Arts Program">
                    </div>
                    <div class="card-content">
                        <h3>Creative Arts Studio</h3>
                        <p>Unleash creativity through music, drama, visual arts, and dance in our vibrant arts program.
                        </p>
                        <div>
                            <span class="program-tag tag-creative">Creative</span>
                            <span class="program-tag tag-sports">Fun</span>
                        </div>
                    </div>
                </div>
                <div class="program-card" data-aos="fade-up" data-aos-delay="300" data-program="sports">
                    <div class="card-image">
                        <img src="{{asset('school-images/hgs4.webp')}}"
                            alt="Sports Program">
                    </div>
                    <div class="card-content">
                        <h3>Sports & Athletics</h3>
                        <p>Building teamwork, discipline, and healthy habits through a variety of sports and physical
                            activities.</p>
                        <div>
                            <span class="program-tag tag-sports">Sports</span>
                            <span class="program-tag tag-academic">Health</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Fun Facts Section -->
    <section class="fun-facts">
        <div class="container">
            <div class="section-title" data-aos="fade-up">
                <h2>Our School By Numbers</h2>
            </div>
            <div class="fun-facts-container">
                <div class="fun-fact" data-aos="fade-up" data-aos-delay="100">
                    <i class="fas fa-users"></i>
                    <h3>2500+</h3>
                    <p>Happy Students</p>
                </div>
                <div class="fun-fact" data-aos="fade-up" data-aos-delay="200">
                    <i class="fas fa-chalkboard-teacher"></i>
                    <h3>150+</h3>
                    <p>Passionate Teachers</p>
                </div>
                <div class="fun-fact" data-aos="fade-up" data-aos-delay="300">
                    <i class="fas fa-smile"></i>
                    <h3>98%</h3>
                    <p>Parent Satisfaction</p>
                </div>
                <div class="fun-fact" data-aos="fade-up" data-aos-delay="400">
                    <i class="fas fa-trophy"></i>
                    <h3>25+</h3>
                    <p>Awards Won</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Activities Section -->
    <section class="activities">
        <div class="container">
            <div class="section-title" data-aos="fade-up">
                <h2>Fun Activities & Facilities</h2>
            </div>
            <div class="activities-container">
                <div class="activity" data-aos="fade-right" data-activity="science-labs">
                    <div class="activity-icon">
                        <i class="fas fa-flask"></i>
                    </div>
                    <div class="activity-content">
                        <h3>Colorful Science Labs</h3>
                        <p>Exciting, child-friendly laboratories where young scientists can safely explore and
                            experiment with hands-on activities.</p>
                    </div>
                </div>
                <div class="activity" data-aos="fade-left" data-activity="arts-center">
                    <div class="activity-icon">
                        <i class="fas fa-palette"></i>
                    </div>
                    <div class="activity-content">
                        <h3>Creative Arts Center</h3>
                        <p>A vibrant space filled with art supplies, musical instruments, and performance areas for
                            creative expression.</p>
                    </div>
                </div>
                <div class="activity" data-aos="fade-right" data-activity="library">
                    <div class="activity-icon">
                        <i class="fas fa-book-open"></i>
                    </div>
                    <div class="activity-content">
                        <h3>Magical Library</h3>
                        <p>A wonderland of books with cozy reading nooks, storytelling corners, and digital learning
                            resources.</p>
                    </div>
                </div>
                <div class="activity" data-aos="fade-left" data-activity="playground">
                    <div class="activity-icon">
                        <i class="fas fa-running"></i>
                    </div>
                    <div class="activity-content">
                        <h3>Adventure Playground</h3>
                        <p>Safe, exciting play areas with age-appropriate equipment that encourages physical activity
                            and social interaction.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="testimonials">
        <div class="container">
            <div class="section-title" data-aos="fade-up">
                <h2 style="color: white;">What Parents Say</h2>
            </div>
            <div class="testimonials-container">
                <div class="testimonial active">
                    <p class="testimonial-text">My daughter wakes up excited to go to school every day! The colorful
                        environment and caring teachers at HisGrace Schools have transformed her attitude toward
                        learning. She's not just academically improving but also growing in confidence and creativity.
                    </p>
                    <div class="testimonial-author">
                        <div class="author-image">
                            <img src="{{asset('school-images/hgs4.webp')}}" alt="Parent">
                        </div>
                        <div class="author-info">
                            <h4>Mrs. Adekunle</h4>
                            <p>Parent of Grade 2 Student</p>
                        </div>
                    </div>
                </div>
                <div class="testimonial">
                    <p class="testimonial-text">The holistic approach to education at HisGrace Schools is remarkable. My
                        children are not just excelling academically but are also developing strong values and social
                        skills. The school feels like a big, happy family!</p>
                    <div class="testimonial-author">
                        <div class="author-image">
                            <img src="{{asset('school-images/hgs4.webp')}}" alt="Parent">
                        </div>
                        <div class="author-info">
                            <h4>Mr. Okon</h4>
                            <p>Parent of JSS 1 Student</p>
                        </div>
                    </div>
                </div>
                <div class="testimonial">
                    <p class="testimonial-text">As an educator myself, I'm incredibly impressed with the quality of
                        teaching and the warm, nurturing environment at HisGrace Schools. They truly understand how to
                        make learning joyful and meaningful for children of all ages.</p>
                    <div class="testimonial-author">
                        <div class="author-image">
                            <img src="{{asset('school-images/hgs3.webp')}}" alt="Parent">
                        </div>
                        <div class="author-info">
                            <h4>Dr. (Mrs) Bello</h4>
                            <p>Parent & Educator</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="testimonial-nav">
                <span class="nav-dot active" data-index="0"></span>
                <span class="nav-dot" data-index="1"></span>
                <span class="nav-dot" data-index="2"></span>
            </div>
        </div>
    </section>

    <!-- Gallery Section -->
    <section class="gallery">
        <div class="container">
            <div class="section-title" data-aos="fade-up">
                <h2>Life at HisGrace Schools</h2>
            </div>
            <div class="gallery-container">
                <div class="gallery-item" data-aos="zoom-in" data-aos-delay="100">
                    <img src="{{asset('school-images/hgs4.webp')}}"
                        alt="Classroom activities">
                    <div class="gallery-overlay">
                        <h4>Colorful Classrooms</h4>
                    </div>
                </div>
                <div class="gallery-item" data-aos="zoom-in" data-aos-delay="200">
                    <img src="{{asset('school-images/hgs1.webp')}}"
                        alt="Students playing">
                    <div class="gallery-overlay">
                        <h4>Play & Learn</h4>
                    </div>
                </div>
                <div class="gallery-item" data-aos="zoom-in" data-aos-delay="300">
                    <img src="{{asset('school-images/hgs2.webp')}}"
                        alt="Sports activities">
                    <div class="gallery-overlay">
                        <h4>Sports & Games</h4>
                    </div>
                </div>
                <div class="gallery-item" data-aos="zoom-in" data-aos-delay="400">
                    <img src="{{asset('school-images/hgs3.webp')}}"
                        alt="Science experiments">
                    <div class="gallery-overlay">
                        <h4>Science Fun</h4>
                    </div>
                </div>
                <div class="gallery-item" data-aos="zoom-in" data-aos-delay="500">
                    <img src="{{asset('school-images/hgs4.webp')}}"
                        alt="Art activities">
                    <div class="gallery-overlay">
                        <h4>Creative Arts</h4>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta">
        <div class="container">
            <h2 data-aos="fade-up">Ready to Join the HisGrace Family?</h2>
            <p data-aos="fade-up" data-aos-delay="100">Give your child the gift of joyful learning in a vibrant,
                nurturing environment. Applications are now open for all age groups!</p>
            <button class="btn" id="applyAdmissionBtn" data-aos="fade-up" data-aos-delay="200">Apply for
                Admission</button>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="footer-container">
                <div class="footer-about">
                    <h3>About HisGrace Schools</h3>
                    <p>A vibrant, joyful learning community where children from age 2 to 16 discover their potential
                        through creative education and character development.</p>
                    <div class="social-links">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
                <div class="footer-links">
                    <h3>Quick Links</h3>
                    <ul>
                        <li><a href="#" class="footer-link" data-page="about">About Us</a></li>
                        <li><a href="#" class="footer-link" data-page="programs">Our Programs</a></li>
                        <li><a href="#" class="footer-link" data-page="admissions">Admissions</a></li>
                        <li><a href="#" class="footer-link" data-page="calendar">School Calendar</a></li>
                        <li><a href="#" class="footer-link" data-page="gallery">Photo Gallery</a></li>
                        <li><a href="#" class="footer-link" data-page="contact">Contact Us</a></li>
                        <li><a href="https://hisgracegroupofschools.com.ng/student/login" target="_blank">Student
                                Portal</a></li>
                    </ul>
                </div>
                <div class="footer-contact">
                    <h3>Get in Touch</h3>
                    <div class="contact-item">
                        <i class="fas fa-map-marker-alt"></i>
                        <div>
                            <p>NO 70B, BESIDE HERALD NEWSPAPER, ILORIN, KWARA STATE</p>
                        </div>
                    </div>
                    <div class="contact-item">
                        <i class="fas fa-phone"></i>
                        <div>
                            <p>09075975835</p>
                            <p>08185648398</p>
                        </div>
                    </div>
                    <div class="contact-item">
                        <i class="fas fa-envelope"></i>
                        <div>
                            <p>info@hisgraceschools.com</p>
                            <p>admissions@hisgraceschools.com</p>
                        </div>
                    </div>
                </div>
                <div class="footer-gallery">
                    <h3>Gallery</h3>
                    <div class="gallery-grid">
                        <div class="gallery-item-small">
                            <img src="{{asset('school-images/hgs4.webp')}}"
                                alt="School Gallery">
                        </div>
                        <div class="gallery-item-small">
                            <img src="{{asset('school-images/hgs3.webp')}}"
                                alt="School Gallery">
                        </div>
                        <div class="gallery-item-small">
                            <img src="{{asset('school-images/hgs2.webp')}}"
                                alt="School Gallery">
                        </div>
                        <div class="gallery-item-small">
                            <img src="{{asset('school-images/hgs1.webp')}}"
                                alt="School Gallery">
                        </div>
                        <div class="gallery-item-small">
                            <img src="{{asset('school-images/hgs2.webp')}}"
                                alt="School Gallery">
                        </div>
                        <div class="gallery-item-small">
                            <img src="{{asset('school-images/hgs-chair.webp')}}"
                                alt="School Gallery">
                        </div>
                    </div>
                </div>
            </div>
            <div class="copyright">
                <p>&copy; 2023 HisGrace Schools. All Rights Reserved. Powered by Paramount EduSoft</p>
            </div>
        </div>
    </footer>

    <!-- Modals -->
    <!-- About Modal -->
    <div class="modal" id="aboutModal">
        <div class="modal-content">
            <div class="modal-header">
                <h2>About HisGrace Schools</h2>
                <button class="modal-close">&times;</button>
            </div>
            <div class="modal-body">
                <h3>Our Story</h3>
                <p>Founded in 1995, HisGrace Schools began with a simple vision: to create a learning environment where
                    children could grow academically, spiritually, and emotionally in a nurturing setting. What started
                    as a small school with just 30 students has now blossomed into a vibrant educational community
                    serving over 2500 students across multiple age groups.</p>

                <h3>Our Mission</h3>
                <p>To provide holistic education that nurtures the intellectual, spiritual, physical, and social
                    development of every child, preparing them to become compassionate, confident, and responsible
                    leaders of tomorrow.</p>

                <h3>Our Vision</h3>
                <p>To be a leading educational institution recognized for academic excellence, character development,
                    and innovation in teaching methods, creating a generation of well-rounded individuals who make
                    positive contributions to society.</p>

                <h3>Our Values</h3>
                <ul>
                    <li><strong>Excellence:</strong> We strive for the highest standards in all we do</li>
                    <li><strong>Integrity:</strong> We uphold honesty, transparency, and ethical behavior</li>
                    <li><strong>Respect:</strong> We value diversity and treat everyone with dignity</li>
                    <li><strong>Innovation:</strong> We embrace creative approaches to teaching and learning</li>
                    <li><strong>Compassion:</strong> We care deeply for our students and community</li>
                </ul>

                <h3>Our Branches</h3>
                <div class="contact-item">
                    <i class="fas fa-map-marker-alt"></i>
                    <div>
                        <p><strong>Main Campus:</strong> NO 70B, BESIDE HERALD NEWSPAPER, ILORIN, KWARA STATE</p>
                    </div>
                </div>
                <div class="contact-item">
                    <i class="fas fa-map-marker-alt"></i>
                    <div>
                        <p><strong>Oyun Branch:</strong> Behind Onward Fishreis, Old Jebba Road, Oyun, Ilorin, Kwara
                            State</p>
                    </div>
                </div>
                <div class="contact-item">
                    <i class="fas fa-map-marker-alt"></i>
                    <div>
                        <p><strong>Offa Branch:</strong> Ero-Omo, behind Otitoloju Multiperpose Cooperative, Offa
                            Garage, Ilorin</p>
                    </div>
                </div>
                <div class="contact-item">
                    <i class="fas fa-map-marker-alt"></i>
                    <div>
                        <p><strong>Gaa Akanbi Branch:</strong> Beside Atidade Super Market Olorunshogo, Onikanga, Gaa
                            Akanbi, Ilorin, Kwara State</p>
                    </div>
                </div>
                <div class="contact-item">
                    <i class="fas fa-map-marker-alt"></i>
                    <div>
                        <p><strong>Sabo-Oke Branch:</strong> No 10 Old Cemetary Road, Sabo-Oke, Ilorin, Kwara State</p>
                    </div>
                </div>
                <div class="contact-item">
                    <i class="fas fa-map-marker-alt"></i>
                    <div>
                        <p><strong>Orisunmibare Branch:</strong> No 22, Orisunmibare Street, behind Ministry of Agric,
                            Ilorin, Kwara State</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Programs Modal -->
    <div class="modal" id="programsModal">
        <div class="modal-content">
            <div class="modal-header">
                <h2>Our Programs</h2>
                <button class="modal-close">&times;</button>
            </div>
            <div class="modal-body">
                <h3>Academic Programs</h3>
                <p>Our academic curriculum is designed to meet the needs of students at different developmental stages
                    while maintaining high standards of excellence.</p>

                <h4>Early Years Foundation (Ages 2-5)</h4>
                <p>Our Early Years program focuses on learning through play, exploration, and hands-on activities. We
                    nurture curiosity and build foundational skills in literacy, numeracy, and social development.</p>

                <h4>Primary Education (Ages 6-11)</h4>
                <p>The Primary program builds strong academic foundations while encouraging creativity and critical
                    thinking. Our curriculum integrates core subjects with arts, physical education, and character
                    development.</p>

                <h4>Junior Secondary (Ages 12-14)</h4>
                <p>Students in our Junior Secondary program expand their knowledge across various subjects while
                    developing leadership skills and exploring their interests through elective courses and
                    extracurricular activities.</p>

                <h4>Senior Secondary (Ages 15-16)</h4>
                <p>Our Senior Secondary program prepares students for national examinations and future academic
                    pursuits. We offer specialized tracks in sciences, arts, and commercial subjects, with guidance for
                    career choices.</p>

                <h3>Enrichment Programs</h3>
                <p>Beyond academics, we offer a variety of enrichment programs that help students discover and develop
                    their talents:</p>
                <ul>
                    <li>STEM Education and Robotics</li>
                    <li>Creative and Performing Arts</li>
                    <li>Sports and Athletics</li>
                    <li>Languages and Cultural Studies</li>
                    <li>Leadership and Community Service</li>
                    <li>Digital Literacy and Coding</li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Admissions Modal -->
    <div class="modal" id="admissionsModal">
        <div class="modal-content">
            <div class="modal-header">
                <h2>Admissions</h2>
                <button class="modal-close">&times;</button>
            </div>
            <div class="modal-body">
                <h3>Admission Process</h3>
                <p>Joining the HisGrace Schools family is a simple and straightforward process. We welcome students from
                    all backgrounds who are eager to learn and grow in our supportive environment.</p>

                <h4>Step 1: Inquiry</h4>
                <p>Begin by filling out our inquiry form or contacting our admissions office. We'll provide you with
                    information about our programs and answer any questions you may have.</p>

                <h4>Step 2: School Visit</h4>
                <p>Schedule a tour of our campus to experience our vibrant learning environment firsthand. You'll meet
                    our dedicated staff and see our facilities in action.</p>

                <h4>Step 3: Application</h4>
                <p>Complete the application form and submit the required documents, including previous academic records,
                    birth certificate, and passport photographs.</p>

                <h4>Step 4: Assessment</h4>
                <p>Depending on the age group, your child may be invited for a simple assessment or interaction session
                    to help us understand their learning needs.</p>

                <h4>Step 5: Admission Decision</h4>
                <p>Our admissions team will review the application and inform you of the decision. If accepted, you'll
                    receive an offer letter with further instructions.</p>

                <h4>Step 6: Enrollment</h4>
                <p>Complete the enrollment process by submitting the required fees and documents. Your child is now
                    ready to begin their journey at HisGrace Schools!</p>

                <h3>Admission Requirements</h3>
                <ul>
                    <li>Completed application form</li>
                    <li>Birth certificate or proof of age</li>
                    <li>Previous academic records (for transfer students)</li>
                    <li>Medical records and immunization history</li>
                    <li>Passport photographs (2 recent copies)</li>
                    <li>Parent/guardian identification</li>
                </ul>

                <h3>Tuition and Fees</h3>
                <p>Our fee structure is designed to be transparent and competitive, reflecting the quality of education
                    and facilities we provide. Please contact our admissions office for detailed information about
                    current tuition rates, payment plans, and available scholarships.</p>

                <div style="margin-top: 2rem;">
                    <button class="btn" id="startApplicationBtn">Start Application</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Facilities Modal -->
    <div class="modal" id="facilitiesModal">
        <div class="modal-content">
            <div class="modal-header">
                <h2>Our Facilities</h2>
                <button class="modal-close">&times;</button>
            </div>
            <div class="modal-body">
                <h3>World-Class Learning Environment</h3>
                <p>At HisGrace Schools, we've created a stimulating and safe environment where students can learn, play,
                    and grow. Our facilities are designed to support our educational philosophy and enhance the learning
                    experience.</p>

                <h3>Academic Facilities</h3>
                <h4>Colorful Classrooms</h4>
                <p>Our bright, airy classrooms are designed to inspire learning. Each classroom is equipped with modern
                    teaching aids, comfortable furniture, and age-appropriate learning materials.</p>

                <h4>Science Laboratories</h4>
                <p>Our well-equipped science labs provide hands-on learning experiences for students. With separate labs
                    for physics, chemistry, and biology, students can safely conduct experiments and explore scientific
                    concepts.</p>

                <h4>Computer and Technology Labs</h4>
                <p>State-of-the-art computer labs with high-speed internet and the latest software ensure our students
                    develop essential digital literacy skills.</p>

                <h4>Library and Resource Center</h4>
                <p>Our library is a treasure trove of knowledge with thousands of books, digital resources, and
                    comfortable reading spaces. It's designed to foster a love for reading and support research
                    activities.</p>

                <h3>Creative and Performing Arts Facilities</h3>
                <h4>Art Studios</h4>
                <p>Spacious art studios equipped with a variety of materials allow students to explore painting,
                    drawing, sculpture, and crafts under the guidance of skilled art teachers.</p>

                <h4>Music Rooms</h4>
                <p>Our music rooms are soundproofed and equipped with a range of instruments. Students receive
                    instruction in both theory and practical aspects of music.</p>

                <h4>Drama and Dance Studio</h4>
                <p>A dedicated space with mirrors, flooring, and stage equipment supports our drama and dance programs,
                    helping students develop confidence and self-expression.</p>

                <h3>Sports and Physical Development</h3>
                <h4>Sports Fields</h4>
                <p>Our campus includes well-maintained fields for football, basketball, volleyball, and other sports,
                    promoting physical fitness and teamwork.</p>

                <h4>Swimming Pool</h4>
                <p>A clean, safe swimming pool with trained instructors helps students develop swimming skills and water
                    safety awareness.</p>

                <h4>Playgrounds</h4>
                <p>Age-appropriate playgrounds with safe, modern equipment provide spaces for younger children to
                    develop motor skills and socialize through play.</p>

                <h3>Student Support Facilities</h3>
                <h4>Cafeteria</h4>
                <p>Our hygienic cafeteria serves nutritious, balanced meals prepared with fresh ingredients. We
                    accommodate various dietary requirements and promote healthy eating habits.</p>

                <h4>Health Center</h4>
                <p>A well-equipped health center with qualified nurses provides first aid and basic medical care. We
                    conduct regular health check-ups and maintain health records for all students.</p>

                <h4>Counseling Center</h4>
                <p>Our counseling center offers academic, career, and personal guidance to help students navigate
                    challenges and make informed decisions about their future.</p>
            </div>
        </div>
    </div>

    <!-- Gallery Modal -->
    <div class="modal" id="galleryModal">
        <div class="modal-content">
            <div class="modal-header">
                <h2>Photo Gallery</h2>
                <button class="modal-close">&times;</button>
            </div>
            <div class="modal-body">
                <div class="gallery-container">
                    <div class="gallery-item">
                        <img src="{{asset('school-images/hgs1.webp')}}"
                            alt="Classroom activities">
                        <div class="gallery-overlay">
                            <h4>Classroom Learning</h4>
                        </div>
                    </div>
                    <div class="gallery-item">
                        <img src="{{asset('school-images/hgs4.webp')}}"
                            alt="Students playing">
                        <div class="gallery-overlay">
                            <h4>Outdoor Play</h4>
                        </div>
                    </div>
                    <div class="gallery-item">
                        <img src="{{asset('school-images/hgs4.webp')}}"
                            alt="Sports activities">
                        <div class="gallery-overlay">
                            <h4>Sports Day</h4>
                        </div>
                    </div>
                    <div class="gallery-item">
                        <img src="{{asset('school-images/hgs3.webp')}}"
                            alt="Science experiments">
                        <div class="gallery-overlay">
                            <h4>Science Experiments</h4>
                        </div>
                    </div>
                    <div class="gallery-item">
                        <img src="{{asset('school-images/hgs2.webp')}}"
                            alt="Art activities">
                        <div class="gallery-overlay">
                            <h4>Art Class</h4>
                        </div>
                    </div>
                    <div class="gallery-item">
                        <img src="{{asset('school-images/hgs1.webp')}}"
                            alt="Library">
                        <div class="gallery-overlay">
                            <h4>Library Time</h4>
                        </div>
                    </div>
                    <div class="gallery-item">
                        <img src="{{asset('school-images/hgs4.webp')}}"
                            alt="School event">
                        <div class="gallery-overlay">
                            <h4>School Events</h4>
                        </div>
                    </div>
                    <div class="gallery-item">
                        <img src="{{asset('school-images/hgs1.webp')}}"
                            alt="Graduation">
                        <div class="gallery-overlay">
                            <h4>Graduation Ceremony</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Contact Modal -->
    <div class="modal" id="contactModal">
        <div class="modal-content">
            <div class="modal-header">
                <h2>Contact Us</h2>
                <button class="modal-close">&times;</button>
            </div>
            <div class="modal-body">
                <h3>Get in Touch</h3>
                <p>We'd love to hear from you! Whether you have questions about our programs, want to schedule a visit,
                    or need more information, our team is here to help.</p>

                <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 2rem; margin: 2rem 0;">
                    <div>
                        <h4>Contact Information</h4>
                        <div class="contact-item">
                            <i class="fas fa-map-marker-alt"></i>
                            <div>
                                <p>NO 70B, BESIDE HERALD NEWSPAPER</p>
                                <p>ILORIN, KWARA STATE</p>
                            </div>
                        </div>
                        <div class="contact-item">
                            <i class="fas fa-phone"></i>
                            <div>
                                <p>09075975835</p>
                                <p>08185648398</p>
                            </div>
                        </div>
                        <div class="contact-item">
                            <i class="fas fa-envelope"></i>
                            <div>
                                <p>info@hisgraceschools.com</p>
                                <p>admissions@hisgraceschools.com</p>
                            </div>
                        </div>
                        <div class="contact-item">
                            <i class="fas fa-clock"></i>
                            <div>
                                <p>Monday - Friday: 8:00 AM - 4:00 PM</p>
                                <p>Saturday: 9:00 AM - 1:00 PM</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <h4>Send us a Message</h4>
                        <form id="contactForm">
                            <div class="form-group">
                                <label for="name">Your Name</label>
                                <input type="text" id="name" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="email">Email Address</label>
                                <input type="email" id="email" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="subject">Subject</label>
                                <input type="text" id="subject" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="message">Message</label>
                                <textarea id="message" class="form-control" required></textarea>
                            </div>
                            <button type="submit" class="btn">Send Message</button>
                        </form>
                    </div>
                </div>

                <h3>Our Branches</h3>
                <div class="contact-item">
                    <i class="fas fa-map-marker-alt"></i>
                    <div>
                        <p><strong>Main Campus:</strong> NO 70B, BESIDE HERALD NEWSPAPER, ILORIN, KWARA STATE</p>
                    </div>
                </div>
                <div class="contact-item">
                    <i class="fas fa-map-marker-alt"></i>
                    <div>
                        <p><strong>Oyun Branch:</strong> Behind Onward Fishreis, Old Jebba Road, Oyun, Ilorin, Kwara
                            State</p>
                    </div>
                </div>
                <div class="contact-item">
                    <i class="fas fa-map-marker-alt"></i>
                    <div>
                        <p><strong>Offa Branch:</strong> Ero-Omo, behind Otitoloju Multiperpose Cooperative, Offa
                            Garage, Ilorin</p>
                    </div>
                </div>
                <div class="contact-item">
                    <i class="fas fa-map-marker-alt"></i>
                    <div>
                        <p><strong>Gaa Akanbi Branch:</strong> Beside Atidade Super Market Olorunshogo, Onikanga, Gaa
                            Akanbi, Ilorin, Kwara State</p>
                    </div>
                </div>
                <div class="contact-item">
                    <i class="fas fa-map-marker-alt"></i>
                    <div>
                        <p><strong>Sabo-Oke Branch:</strong> No 10 Old Cemetary Road, Sabo-Oke, Ilorin, Kwara State</p>
                    </div>
                </div>
                <div class="contact-item">
                    <i class="fas fa-map-marker-alt"></i>
                    <div>
                        <p><strong>Orisunmibare Branch:</strong> No 22, Orisunmibare Street, behind Ministry of Agric,
                            Ilorin, Kwara State</p>
                    </div>
                </div>

                <h3>Find Us</h3>
                <div
                    style="height: 300px; background-color: #f1f1f1; border-radius: 10px; display: flex; align-items: center; justify-content: center; margin-top: 1rem;">
                    <p><i class="fas fa-map-marked-alt"
                            style="font-size: 2rem; color: var(--primary-color); margin-right: 1rem;"></i> Map of
                        HisGrace Schools Location</p>
                </div>
            </div>
        </div>
    </div>

    <!-- School Calendar Modal -->
    <div class="modal" id="calendarModal">
        <div class="modal-content">
            <div class="modal-header">
                <h2>School Calendar</h2>
                <button class="modal-close">&times;</button>
            </div>
            <div class="modal-body">
                <h3>Academic Year 2023/2024</h3>

                <h4>First Term</h4>
                <ul>
                    <li><strong>September 11:</strong> Resumption for First Term</li>
                    <li><strong>September 18-22:</strong> Orientation Week for New Students</li>
                    <li><strong>October 1:</strong> Independence Day Celebration</li>
                    <li><strong>October 16-20:</strong> Mid-Term Break</li>
                    <li><strong>November 10:</strong> Parent-Teacher Conference</li>
                    <li><strong>November 24:</strong> Inter-House Sports Competition</li>
                    <li><strong>December 8:</strong> Christmas Concert</li>
                    <li><strong>December 15:</strong> End of First Term</li>
                    <li><strong>December 18 - January 8:</strong> Christmas Holiday</li>
                </ul>

                <h4>Second Term</h4>
                <ul>
                    <li><strong>January 9:</strong> Resumption for Second Term</li>
                    <li><strong>January 15:</strong> Science Fair</li>
                    <li><strong>February 12-16:</strong> Mid-Term Break</li>
                    <li><strong>March 8:</strong> International Women's Day Celebration</li>
                    <li><strong>March 22:</strong> Arts & Cultural Festival</li>
                    <li><strong>April 5:</strong> End of Second Term</li>
                    <li><strong>April 8 - April 22:</strong> Easter Holiday</li>
                </ul>

                <h4>Third Term</h4>
                <ul>
                    <li><strong>April 23:</strong> Resumption for Third Term</li>
                    <li><strong>May 1:</strong> Workers' Day</li>
                    <li><strong>May 27:</strong> Children's Day Celebration</li>
                    <li><strong>June 12:</strong> Democracy Day</li>
                    <li><strong>June 17-21:</strong> Mid-Term Break</li>
                    <li><strong>July 5-12:</strong> Examination Week</li>
                    <li><strong>July 19:</strong> Valedictory Service</li>
                    <li><strong>July 20:</strong> End of Academic Year</li>
                    <li><strong>July 20 - September 15:</strong> Summer Holiday</li>
                </ul>

                <p style="margin-top: 2rem;"><strong>Note:</strong> The school calendar is subject to change. Parents
                    will be notified of any adjustments through official communication channels.</p>
            </div>
        </div>
    </div>

    <!-- Age Group Details Modals -->
    <!-- Early Years Modal -->
    <div class="modal" id="earlyYearsModal">
        <div class="modal-content">
            <div class="modal-header">
                <h2>Early Years (Ages 2-5)</h2>
                <button class="modal-close">&times;</button>
            </div>
            <div class="modal-body">
                <h3>Nurturing Curiosity and Wonder</h3>
                <p>Our Early Years program provides a safe, stimulating environment where young children can explore,
                    discover, and develop a love for learning. We believe that these formative years are crucial for
                    building the foundation for lifelong learning.</p>

                <h3>Our Approach</h3>
                <p>We follow a play-based approach to learning, recognizing that young children learn best through
                    hands-on experiences, exploration, and guided play. Our curriculum is designed to nurture all
                    aspects of a child's development - cognitive, social, emotional, physical, and creative.</p>

                <h3>Key Areas of Learning</h3>
                <ul>
                    <li><strong>Communication and Language:</strong> Developing listening, speaking, and early literacy
                        skills through stories, songs, and conversations</li>
                    <li><strong>Physical Development:</strong> Enhancing fine and gross motor skills through indoor and
                        outdoor activities</li>
                    <li><strong>Personal, Social, and Emotional Development:</strong> Building self-confidence,
                        independence, and positive relationships</li>
                    <li><strong>Literacy:</strong> Introduction to phonics, letter recognition, and early reading skills
                    </li>
                    <li><strong>Mathematics:</strong> Exploring numbers, shapes, patterns, and basic mathematical
                        concepts</li>
                    <li><strong>Understanding the World:</strong> Discovering the environment, people, and communities
                    </li>
                    <li><strong>Expressive Arts and Design:</strong> Encouraging creativity through art, music, dance,
                        and imaginative play</li>
                </ul>

                <h3>Daily Routine</h3>
                <p>Our daily schedule provides structure while allowing flexibility for child-initiated activities. A
                    typical day includes circle time, learning centers, outdoor play, story time, music and movement,
                    and rest periods.</p>

                <h3>Facilities</h3>
                <p>Our Early Years section features child-friendly classrooms with age-appropriate furniture and
                    learning materials, a dedicated outdoor play area with safe equipment, a nap room for younger
                    children, and child-sized restroom facilities.</p>

                <h3>Parent Involvement</h3>
                <p>We believe that parents are a child's first teachers. We encourage active parent involvement through
                    regular communication, parent-teacher meetings, workshops, and special events where families can
                    participate in their child's learning journey.</p>

                <div style="margin-top: 2rem;">
                    <button class="btn" id="inquireEarlyYearsBtn">Inquire About Enrollment</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Primary Modal -->
    <div class="modal" id="primaryModal">
        <div class="modal-content">
            <div class="modal-header">
                <h2>Primary (Ages 6-11)</h2>
                <button class="modal-close">&times;</button>
            </div>
            <div class="modal-body">
                <h3>Building Strong Foundations</h3>
                <p>Our Primary program builds on the foundation laid in the Early Years, providing a structured yet
                    engaging learning environment where students develop essential academic skills while nurturing their
                    natural curiosity and creativity.</p>

                <h3>Curriculum</h3>
                <p>Our comprehensive curriculum covers core subjects including English Language, Mathematics, Science,
                    and Social Studies. We also place strong emphasis on co-curricular subjects such as Art, Music,
                    Physical Education, Computer Studies, and Religious Education.</p>

                <h3>Teaching Approach</h3>
                <p>We employ a student-centered approach to teaching, recognizing that each child learns differently.
                    Our teachers use a variety of instructional methods including direct instruction, collaborative
                    learning, hands-on activities, and technology integration to cater to diverse learning styles.</p>

                <h3>Key Features</h3>
                <ul>
                    <li><strong>Literacy Development:</strong> Fostering reading, writing, speaking, and listening
                        skills through a balanced literacy approach</li>
                    <li><strong>Numeracy Skills:</strong> Building mathematical understanding through concrete,
                        pictorial, and abstract methods</li>
                    <li><strong>Scientific Inquiry:</strong> Developing observation, experimentation, and critical
                        thinking skills</li>
                    <li><strong>Creative Expression:</strong> Encouraging artistic and musical talents through dedicated
                        arts programs</li>
                    <li><strong>Physical Education:</strong> Promoting fitness, teamwork, and healthy competition
                        through sports and games</li>
                    <li><strong>Digital Literacy:</strong> Introducing technology skills through age-appropriate
                        computer lessons</li>
                    <li><strong>Character Education:</strong> Instilling values such as respect, responsibility,
                        honesty, and compassion</li>
                </ul>

                <h3>Assessment</h3>
                <p>We use a combination of formative and summative assessments to monitor student progress. Regular
                    assessments help us identify strengths and areas for improvement, enabling us to provide targeted
                    support and enrichment as needed.</p>

                <h3>Co-curricular Activities</h3>
                <p>Beyond academics, we offer a variety of clubs and activities including debate club, drama club, music
                    lessons, sports teams, art club, and science club. These activities help students discover their
                    interests and develop talents outside the classroom.</p>

                <div style="margin-top: 2rem;">
                    <button class="btn" id="inquirePrimaryBtn">Inquire About Enrollment</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Junior Secondary Modal -->
    <div class="modal" id="juniorSecondaryModal">
        <div class="modal-content">
            <div class="modal-header">
                <h2>Junior Secondary (Ages 12-14)</h2>
                <button class="modal-close">&times;</button>
            </div>
            <div class="modal-body">
                <h3>Expanding Horizons</h3>
                <p>Our Junior Secondary program bridges the gap between primary education and more specialized senior
                    secondary studies. During these crucial years, we help students expand their knowledge, develop
                    critical thinking skills, and explore their interests in a supportive environment.</p>

                <h3>Curriculum</h3>
                <p>Our curriculum follows the national standards while incorporating international best practices. Core
                    subjects include English Language, Mathematics, Basic Science, Basic Technology, Social Studies,
                    Civic Education, Cultural and Creative Arts, and Computer Studies. Students also study at least one
                    Nigerian language and French.</p>

                <h3>Teaching Methodology</h3>
                <p>We employ a blend of traditional and modern teaching methods to engage students and enhance learning.
                    Our approach emphasizes critical thinking, problem-solving, collaboration, and creativity. Teachers
                    use technology, project-based learning, and real-world applications to make lessons relevant and
                    engaging.</p>

                <h3>Key Features</h3>
                <ul>
                    <li><strong>Subject Specialization:</strong> Introduction to more specialized subject areas taught
                        by subject specialists</li>
                    <li><strong>Science Education:</strong> Practical science lessons in well-equipped laboratories to
                        foster scientific inquiry</li>
                    <li><strong>Technology Integration:</strong> Developing digital literacy and coding skills through
                        dedicated ICT classes</li>
                    <li><strong>Entrepreneurship Education:</strong> Introducing basic business concepts and financial
                        literacy</li>
                    <li><strong>Leadership Development:</strong> Opportunities to develop leadership skills through
                        class representative roles, clubs, and projects</li>
                    <li><strong>Career Guidance:</strong> Beginning career exploration to help students make informed
                        decisions about future paths</li>
                    <li><strong>Character Education:</strong> Continued focus on values, ethics, and social
                        responsibility</li>
                </ul>

                <h3>Assessment</h3>
                <p>Assessment in Junior Secondary includes continuous assessment through classwork, homework, projects,
                    and tests, as well as end-of-term examinations. This comprehensive approach provides a holistic view
                    of each student's progress and helps prepare them for the demands of Senior Secondary education.</p>

                <h3>Co-curricular Activities</h3>
                <p>We offer a wide range of co-curricular activities including sports teams, debate club, drama club,
                    music ensembles, science club, coding club, and community service projects. These activities help
                    students develop teamwork, leadership, and time management skills while pursuing their interests.
                </p>

                <div style="margin-top: 2rem;">
                    <button class="btn" id="inquireJuniorSecondaryBtn">Inquire About Enrollment</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Senior Secondary Modal -->
    <div class="modal" id="seniorSecondaryModal">
        <div class="modal-content">
            <div class="modal-header">
                <h2>Senior Secondary (Ages 15-16)</h2>
                <button class="modal-close">&times;</button>
            </div>
            <div class="modal-body">
                <h3>Preparing for Future Success</h3>
                <p>Our Senior Secondary program is designed to prepare students for higher education and future careers.
                    We offer a rigorous curriculum that challenges students academically while providing the support
                    they need to excel in national examinations and beyond.</p>

                <h3>Curriculum and Subject Streams</h3>
                <p>Students in Senior Secondary choose from three main subject streams based on their interests and
                    career aspirations:</p>

                <h4>Science Stream</h4>
                <p>Mathematics, English Language, Physics, Chemistry, Biology, Geography, and one elective subject
                    (Further Mathematics, Technical Drawing, or Agricultural Science).</p>

                <h4>Arts/Humanities Stream</h4>
                <p>English Language, Mathematics, Literature-in-English, Government, History, Economics, and one
                    elective subject (CRK/IRK, Geography, or Visual Arts).</p>

                <h4>Commercial Stream</h4>
                <p>English Language, Mathematics, Economics, Accounting, Commerce, Government, and one elective subject
                    (Business Studies, Geography, or CRK/IRK).</p>

                <h3>Teaching Approach</h3>
                <p>Our teaching approach in Senior Secondary focuses on deep subject knowledge, critical thinking,
                    analytical skills, and independent learning. We emphasize exam preparation while ensuring students
                    develop the broader skills needed for success in higher education and future careers.</p>

                <h3>Key Features</h3>
                <ul>
                    <li><strong>Exam Preparation:</strong> Comprehensive preparation for WAEC, NECO, and other national
                        examinations</li>
                    <li><strong>Advanced Science Labs:</strong> State-of-the-art laboratories for practical science
                        education</li>
                    <li><strong>Digital Learning:</strong> Integration of technology in learning to enhance digital
                        literacy</li>
                    <li><strong>Career Guidance:</strong> Regular career counseling sessions and exposure to various
                        professions</li>
                    <li><strong>University Preparation:</strong> Guidance on university applications, scholarship
                        opportunities, and career pathways</li>
                    <li><strong>Leadership Opportunities:</strong> Prefect positions, club leadership roles, and
                        community service projects</li>
                    <li><strong>Entrepreneurship Skills:</strong> Development of business acumen through projects and
                        competitions</li>
                </ul>

                <h3>Assessment</h3>
                <p>Assessment includes continuous assessment through assignments, projects, and tests, as well as mock
                    examinations that simulate the conditions of final examinations. This comprehensive approach ensures
                    students are well-prepared for their final assessments.</p>

                <h3>Beyond the Classroom</h3>
                <p>We offer opportunities for students to participate in national and international competitions,
                    community service projects, internships, and mentorship programs. These experiences help students
                    develop practical skills, build networks, and gain insights into various career fields.</p>

                <div style="margin-top: 2rem;">
                    <button class="btn" id="inquireSeniorSecondaryBtn">Inquire About Enrollment</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Program Details Modals -->
    <!-- STEM Modal -->
    <div class="modal" id="stemModal">
        <div class="modal-content">
            <div class="modal-header">
                <h2>STEM Explorers Program</h2>
                <button class="modal-close">&times;</button>
            </div>
            <div class="modal-body">
                <h3>Igniting Passion for Science and Technology</h3>
                <p>Our STEM Explorers program is designed to foster curiosity, creativity, and critical thinking in
                    science, technology, engineering, and mathematics. Through hands-on activities, experiments, and
                    projects, students develop a deep understanding of STEM concepts and their real-world applications.
                </p>

                <h3>Program Objectives</h3>
                <ul>
                    <li>To develop scientific literacy and inquiry skills</li>
                    <li>To foster creativity and innovation in problem-solving</li>
                    <li>To build a strong foundation in mathematics and logical thinking</li>
                    <li>To introduce students to coding and digital technology</li>
                    <li>To connect STEM concepts to everyday life and future careers</li>
                </ul>

                <h3>Age-Appropriate Activities</h3>
                <h4>Early Years (Ages 2-5)</h4>
                <p>Our youngest STEM explorers engage in sensory activities, simple experiments, and building challenges
                    that develop observation skills, curiosity, and basic understanding of the natural world.</p>

                <h4>Primary (Ages 6-11)</h4>
                <p>Primary students participate in more structured experiments, coding games, robotics kits, and
                    engineering challenges. They learn to ask questions, make predictions, test ideas, and draw
                    conclusions.</p>

                <h4>Junior Secondary (Ages 12-14)</h4>
                <p>Junior secondary students dive deeper into scientific concepts, learn programming languages, work
                    with advanced robotics kits, and engage in engineering design challenges that solve real-world
                    problems.</p>

                <h4>Senior Secondary (Ages 15-16)</h4>
                <p>Senior secondary students undertake advanced projects, participate in STEM competitions, learn
                    specialized software, and explore career pathways in STEM fields.</p>

                <h3>Facilities and Resources</h3>
                <p>Our STEM program is supported by well-equipped science laboratories, a technology lab with computers
                    and tablets, robotics kits, science equipment, and a wide range of educational software and digital
                    resources.</p>

                <h3>STEM Events and Competitions</h3>
                <p>We organize annual STEM fairs, coding competitions, robotics challenges, and science quizzes.
                    Students also have opportunities to participate in regional and national STEM competitions and
                    exhibitions.</p>

                <h3>Partnerships</h3>
                <p>We collaborate with STEM organizations, universities, and industry partners to provide students with
                    exposure to real-world STEM applications and career opportunities. Guest speakers, field trips, and
                    mentorship programs enhance the learning experience.</p>

                <div style="margin-top: 2rem;">
                    <button class="btn" id="inquireSTEMBtn">Inquire About STEM Program</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Arts Modal -->
    <div class="modal" id="artsModal">
        <div class="modal-content">
            <div class="modal-header">
                <h2>Creative Arts Studio</h2>
                <button class="modal-close">&times;</button>
            </div>
            <div class="modal-body">
                <h3>Unleashing Creativity and Self-Expression</h3>
                <p>Our Creative Arts Studio provides a vibrant space where students can explore various art forms,
                    develop their creative talents, and express themselves through visual arts, music, drama, and dance.
                    We believe that arts education is essential for holistic development and fosters skills that are
                    valuable in all areas of life.</p>

                <h3>Program Components</h3>
                <h4>Visual Arts</h4>
                <p>Students explore drawing, painting, sculpture, printmaking, textiles, and digital art. They learn
                    about art history, different artistic styles, and techniques while developing their own artistic
                    voice. Regular exhibitions showcase student artwork.</p>

                <h4>Music</h4>
                <p>Our music program includes vocal training, instrumental lessons (piano, guitar, drums, recorder, and
                    traditional instruments), music theory, and appreciation. Students participate in choir, band, and
                    ensemble performances.</p>

                <h4>Drama and Theater</h4>
                <p>Through drama classes and productions, students develop acting skills, stage presence, improvisation
                    abilities, and confidence. They learn about scriptwriting, directing, set design, and backstage
                    production.</p>

                <h4>Dance</h4>
                <p>Our dance program covers various styles including contemporary, ballet, traditional African dance,
                    and cultural dances. Students develop technique, coordination, rhythm, and self-expression through
                    movement.</p>

                <h3>Age-Appropriate Activities</h3>
                <h4>Early Years (Ages 2-5)</h4>
                <p>Our youngest students engage in sensory art activities, music and movement sessions, storytelling,
                    and dramatic play that foster creativity and self-expression in a nurturing environment.</p>

                <h4>Primary (Ages 6-11)</h4>
                <p>Primary students explore different art forms, learn basic techniques, and participate in group
                    performances. They develop foundational skills while discovering their interests and talents.</p>

                <h4>Junior Secondary (Ages 12-14)</h4>
                <p>Junior secondary students focus on skill development in chosen art forms, learn about arts history
                    and theory, and participate in more complex productions and exhibitions.</p>

                <h4>Senior Secondary (Ages 15-16)</h4>
                <p>Senior secondary students can specialize in specific art forms, develop portfolios, and undertake
                    advanced projects. They have opportunities to lead productions and exhibitions.</p>

                <h3>Facilities</h3>
                <p>Our arts facilities include art studios with natural light, a music room with various instruments, a
                    drama room with stage equipment, a dance studio with mirrors and flooring, and an exhibition space
                    for showcasing student work.</p>

                <h3>Performances and Exhibitions</h3>
                <p>We organize regular art exhibitions, musical concerts, drama productions, and dance performances
                    throughout the year. These events provide students with opportunities to showcase their talents and
                    celebrate their achievements.</p>

                <h3>Community Engagement</h3>
                <p>Our arts program includes community projects such as public art installations, performances at
                    community events, and workshops with visiting artists. These experiences help students connect with
                    the broader community and understand the role of arts in society.</p>

                <div style="margin-top: 2rem;">
                    <button class="btn" id="inquireArtsBtn">Inquire About Arts Program</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Sports Modal -->
    <div class="modal" id="sportsModal">
        <div class="modal-content">
            <div class="modal-header">
                <h2>Sports & Athletics Program</h2>
                <button class="modal-close">&times;</button>
            </div>
            <div class="modal-body">
                <h3>Building Healthy Bodies and Character</h3>
                <p>Our Sports & Athletics program promotes physical fitness, teamwork, discipline, and healthy
                    competition. We believe that participation in sports is essential for the holistic development of
                    students, teaching valuable life skills that extend beyond the playing field.</p>

                <h3>Program Objectives</h3>
                <ul>
                    <li>To develop physical fitness, motor skills, and coordination</li>
                    <li>To foster teamwork, sportsmanship, and fair play</li>
                    <li>To build resilience, discipline, and goal-setting abilities</li>
                    <li>To promote a healthy, active lifestyle</li>
                    <li>To provide opportunities for competition and personal achievement</li>
                </ul>

                <h3>Sports Offerings</h3>
                <h4>Team Sports</h4>
                <p>We offer training and competition in football (soccer), basketball, volleyball, handball, and
                    cricket. Students learn the rules, develop skills, and participate in inter-house and inter-school
                    competitions.</p>

                <h4>Athletics</h4>
                <p>Our athletics program includes track and field events such as sprints, relays, long jump, high jump,
                    and shot put. Students develop speed, endurance, and technique while representing the school in
                    competitions.</p>
                <h4>Swimming</h4>
                <p>With our on-campus swimming pool, students learn water safety, swimming strokes, and competitive
                    techniques. We offer lessons for beginners and training for competitive swimmers.</p>

                <h4>Other Sports</h4>
                <p>We also provide opportunities for students to participate in table tennis, badminton, tennis,
                    gymnastics, and martial arts based on interest and availability of coaches.</p>

                <h3>Age-Appropriate Activities</h3>
                <h4>Early Years (Ages 2-5)</h4>
                <p>Our youngest students engage in fundamental movement skills, simple games, and activities that
                    develop coordination, balance, and spatial awareness in a fun, non-competitive environment.</p>

                <h4>Primary (Ages 6-11)</h4>
                <p>Primary students learn basic sports skills, rules of various games, and participate in modified
                    versions of sports. The focus is on participation, skill development, and enjoyment.</p>

                <h4>Junior Secondary (Ages 12-14)</h4>
                <p>Junior secondary students focus on skill refinement, tactical understanding, and competitive play.
                    They have opportunities to represent the school in various sports.</p>

                <h4>Senior Secondary (Ages 15-16)</h4>
                <p>Senior secondary students can specialize in specific sports, develop advanced skills, and take on
                    leadership roles within teams. They represent the school in competitive leagues and tournaments.</p>

                <h3>Facilities</h3>
                <p>Our sports facilities include a multipurpose sports field, basketball courts, volleyball courts, a
                    swimming pool, a gymnasium, and equipment for various sports. We maintain high standards of safety
                    and quality in all our facilities.</p>

                <h3>Events and Competitions</h3>
                <p>We organize annual inter-house sports competitions, participate in inter-school leagues and
                    tournaments, and host sports clinics and workshops. These events provide students with opportunities
                    to test their skills, learn from others, and celebrate achievement.</p>

                <h3>Health and Wellness</h3>
                <p>Beyond sports skills, our program emphasizes health education, nutrition, injury prevention, and
                    mental well-being. We work with students to develop healthy habits that will serve them throughout
                    life.</p>

                <div style="margin-top: 2rem;">
                    <button class="btn" id="inquireSportsBtn">Inquire About Sports Program</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Activity Details Modals -->
    <!-- Science Labs Modal -->
    <div class="modal" id="scienceLabsModal">
        <div class="modal-content">
            <div class="modal-header">
                <h2>Colorful Science Laboratories</h2>
                <button class="modal-close">&times;</button>
            </div>
            <div class="modal-body">
                <h3>Exploring the Wonders of Science</h3>
                <p>Our science laboratories are vibrant, engaging spaces where students can explore scientific concepts
                    through hands-on experiments and investigations. Designed to spark curiosity and foster scientific
                    thinking, these labs are equipped with age-appropriate tools and resources that make science come
                    alive.</p>

                <h3>Laboratory Features</h3>
                <ul>
                    <li>Bright, colorful design that creates an inviting atmosphere for learning</li>
                    <li>Child-friendly furniture and equipment sized appropriately for different age groups</li>
                    <li>Interactive displays and models that demonstrate scientific concepts</li>
                    <li>Safety features including emergency equipment and clear safety protocols</li>
                    <li>Digital tools and resources that enhance traditional experiments</li>
                    <li>Flexible learning spaces that support individual and group work</li>
                </ul>

                <h3>Age-Appropriate Laboratories</h3>
                <h4>Early Years Discovery Lab</h4>
                <p>Our youngest scientists explore the world through sensory activities, simple experiments, and
                    observation stations. This lab features magnifying glasses, magnets, color mixing stations, and
                    nature exploration kits that encourage curiosity and discovery.</p>

                <h4>Primary Science Lab</h4>
                <p>Primary students conduct more structured experiments in areas such as plant growth, simple machines,
                    electricity, and properties of matter. The lab is equipped with microscopes, measurement tools, and
                    experiment kits that support the primary science curriculum.</p>

                <h4>Junior Secondary Science Labs</h4>
                <p>We have separate laboratories for physics, chemistry, and biology, each equipped with specialized
                    equipment and resources. Students conduct experiments that align with the junior secondary
                    curriculum, developing practical skills and scientific methodology.</p>

                <h4>Senior Secondary Advanced Labs</h4>
                <p>Our senior secondary labs feature advanced equipment for more complex experiments and investigations.
                    These labs prepare students for practical examinations and further studies in science-related
                    fields.</p>

                <h3>Hands-On Learning</h3>
                <p>Our approach to science education emphasizes inquiry-based learning, where students ask questions,
                    design experiments, collect and analyze data, and draw conclusions. This hands-on approach helps
                    students develop critical thinking skills and a deeper understanding of scientific concepts.</p>

                <h3>Safety First</h3>
                <p>Safety is our top priority in all science laboratories. We have clear safety protocols,
                    age-appropriate safety equipment, and trained staff who ensure that all activities are conducted
                    safely. Students are taught safety practices appropriate to their age level.</p>

                <h3>Beyond the Curriculum</h3>
                <p>Our science labs support various extracurricular activities including science club, robotics club,
                    environmental projects, and participation in science fairs and competitions. These opportunities
                    allow students to pursue their scientific interests beyond the regular curriculum.</p>

                <div style="margin-top: 2rem;">
                    <button class="btn" id="inquireScienceLabsBtn">Learn More About Science Program</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Arts Center Modal -->
    <div class="modal" id="artsCenterModal">
        <div class="modal-content">
            <div class="modal-header">
                <h2>Creative Arts Center</h2>
                <button class="modal-close">&times;</button>
            </div>
            <div class="modal-body">
                <h3>A Hub of Creativity and Expression</h3>
                <p>Our Creative Arts Center is a vibrant, inspiring space where students can explore various art forms
                    and express their creativity. With specialized studios for visual arts, music, drama, and dance,
                    this center provides the resources and environment for students to discover and develop their
                    artistic talents.</p>

                <h3>Center Features</h3>
                <ul>
                    <li>Art studios with abundant natural light and flexible workspaces</li>
                    <li>Music rooms with soundproofing and a variety of instruments</li>
                    <li>Drama room with stage, lighting, and costume storage</li>
                    <li>Dance studio with mirrors, ballet barres, and sprung flooring</li>
                    <li>Exhibition gallery for showcasing student artwork</li>
                    <li>Digital arts lab with computers and creative software</li>
                    <li>Recording studio for music production and podcasting</li>
                </ul>

                <h3>Visual Arts Studio</h3>
                <p>Our visual arts studio is equipped with easels, worktables, pottery wheels, kiln, printing press, and
                    a wide range of art materials. Students can explore painting, drawing, sculpture, ceramics,
                    printmaking, textiles, and digital arts. The studio features display areas where students can share
                    their work and receive feedback.</p>

                <h3>Music Rooms</h3>
                <p>We have both general music classrooms and practice rooms for individual and small group instruction.
                    Our music facilities include pianos, keyboards, guitars, drums, traditional Nigerian instruments,
                    and a variety of classroom percussion instruments. The rooms are acoustically treated to optimize
                    sound quality.</p>

                <h3>Drama and Performance Space</h3>
                <p>The drama room features a small stage with lighting and sound equipment, costume storage, and
                    flexible seating for performances and rehearsals. Students can explore acting, improvisation,
                    scriptwriting, directing, and stagecraft in this versatile space.</p>

                <h3>Dance Studio</h3>
                <p>Our dance studio has professional sprung flooring to prevent injuries, full-length mirrors, ballet
                    barres, and sound system. The space is designed to accommodate various dance styles including
                    contemporary, ballet, traditional African dance, and cultural dances.</p>

                <h3>Age-Appropriate Activities</h3>
                <h4>Early Years (Ages 2-5)</h4>
                <p>Our youngest students engage in sensory art activities, music and movement sessions, storytelling,
                    and dramatic play that foster creativity and self-expression.</p>

                <h4>Primary (Ages 6-11)</h4>
                <p>Primary students explore different art forms, learn basic techniques, and participate in group
                    performances. They develop foundational skills while discovering their interests and talents.</p>

                <h4>Junior Secondary (Ages 12-14)</h4>
                <p>Junior secondary students focus on skill development in chosen art forms, learn about arts history
                    and theory, and participate in more complex productions and exhibitions.</p>

                <h4>Senior Secondary (Ages 15-16)</h4>
                <p>Senior secondary students can specialize in specific art forms, develop portfolios, and undertake
                    advanced projects. They have opportunities to lead productions and exhibitions.</p>

                <h3>Community Engagement</h3>
                <p>Our Creative Arts Center regularly hosts events for the school community including art exhibitions,
                    concerts, drama productions, and dance performances. We also invite guest artists and performers to
                    work with students and share their expertise.</p>

                <div style="margin-top: 2rem;">
                    <button class="btn" id="inquireArtsCenterBtn">Learn More About Arts Program</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Library Modal -->
    <div class="modal" id="libraryModal">
        <div class="modal-content">
            <div class="modal-header">
                <h2>Magical Library</h2>
                <button class="modal-close">&times;</button>
            </div>
            <div class="modal-body">
                <h3>A Gateway to Knowledge and Imagination</h3>
                <p>Our library is more than just a collection of books—it's a magical space where students can explore
                    new worlds, discover information, and develop a love for reading. Designed to be welcoming and
                    inspiring, the library features cozy reading nooks, interactive displays, and a wide range of
                    resources to support learning and leisure reading.</p>

                <h3>Library Features</h3>
                <ul>
                    <li>Age-appropriate sections for different reading levels and interests</li>
                    <li>Comfortable reading areas with soft seating and reading nooks</li>
                    <li>Interactive displays that highlight new books and themed collections</li>
                    <li>Digital resources including e-books, audiobooks, and educational databases</li>
                    <li>Computer stations for research and digital learning</li>
                    <li>Storytelling corner with props and puppets for younger students</li>
                    <li>Collaborative spaces for group work and projects</li>
                </ul>

                <h3>Collection</h3>
                <p>Our library collection includes over 10,000 books carefully selected to support the curriculum and
                    encourage reading for pleasure. The collection includes:</p>
                <ul>
                    <li><strong>Picture Books:</strong> Beautifully illustrated books for our youngest readers</li>
                    <li><strong>Early Readers:</strong> Books designed to support developing reading skills</li>
                    <li><strong>Fiction:</strong> A wide range of novels and stories for all reading levels</li>
                    <li><strong>Non-Fiction:</strong> Informational books on various topics to support research and
                        curiosity</li>
                    <li><strong>Reference Materials:</strong> Encyclopedias, dictionaries, and atlases</li>
                    <li><strong>Digital Resources:</strong> E-books, audiobooks, and educational databases</li>
                    <li><strong>Multilingual Books:</strong> Books in various languages including Nigerian languages
                    </li>
                </ul>

                <h3>Library Programs</h3>
                <p>We offer a variety of programs to promote reading and information literacy:</p>
                <ul>
                    <li><strong>Storytelling Sessions:</strong> Regular storytelling sessions for younger students</li>
                    <li><strong>Reading Challenges:</strong> Incentive programs that encourage reading</li>
                    <li><strong>Book Clubs:</strong> Age-appropriate book discussion groups</li>
                    <li><strong>Author Visits:</strong> Opportunities to meet authors and illustrators</li>
                    <li><strong>Library Skills Lessons:</strong> Instruction on research and information literacy</li>
                    <li><strong>Book Fairs:</strong> Events that promote reading and raise funds for library resources
                    </li>
                </ul>

                <h3>Age-Appropriate Spaces</h3>
                <h4>Early Years Reading Corner</h4>
                <p>A cozy, colorful space with soft seating, floor cushions, and low shelves filled with picture books
                    and easy readers. This area includes a storytelling corner with props and puppets to make stories
                    come alive.</p>

                <h4>Primary Section</h4>
                <p>The primary section features a variety of seating options including bean bags, reading pods, and
                    tables for group work. Books are organized by genre and reading level to help students find
                    materials that match their interests and abilities.</p>

                <h4>Secondary Research Area</h4>
                <p>Older students have access to a more traditional library space with study carrels, computer stations,
                    and a comprehensive reference section to support their research and independent learning needs.</p>

                <h3>Digital Resources</h3>
                <p>Our library provides access to digital resources including e-books, audiobooks, educational
                    databases, and online learning platforms. Students can use library computers or access these
                    resources from home through our online portal.</p>

                <h3>Library Staff</h3>
                <p>Our library is staffed by qualified librarians who are passionate about promoting reading and
                    information literacy. They provide instruction, help students find resources, and create engaging
                    programs that foster a love of reading.</p>

                <div style="margin-top: 2rem;">
                    <button class="btn" id="inquireLibraryBtn">Learn More About Library Resources</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Playground Modal -->
    <div class="modal" id="playgroundModal">
        <div class="modal-content">
            <div class="modal-header">
                <h2>Adventure Playground</h2>
                <button class="modal-close">&times;</button>
            </div>
            <div class="modal-body">
                <h3>Where Fun and Learning Come Together</h3>
                <p>Our adventure playgrounds are designed to provide safe, stimulating environments where children can
                    engage in physical activity, develop social skills, and explore their capabilities. With
                    age-appropriate equipment and thoughtful design, these spaces encourage active play, imagination,
                    and risk-taking in a controlled setting.</p>

                <h3>Playground Features</h3>
                <ul>
                    <li>Age-appropriate play equipment for different developmental stages</li>
                    <li>Safety surfacing to minimize injuries from falls</li>
                    <li>Shaded areas to protect from sun and rain</li>
                    <li>Seating for supervisors and parents</li>
                    <li>Natural elements including trees, gardens, and water features</li>
                    <li>Open spaces for running and group games</li>
                    <li>Quiet areas for relaxation and socializing</li>
                </ul>

                <h3>Age-Appropriate Play Areas</h3>
                <h4>Early Years Playground (Ages 2-5)</h4>
                <p>Designed for our youngest learners, this playground features low climbing structures, small slides,
                    sand play areas, water tables, and sensory play elements. Equipment is sized appropriately for small
                    children and focuses on developing gross motor skills, balance, and coordination. The area is fully
                    enclosed with safety fencing and constant supervision.</p>

                <h4>Primary Playground (Ages 6-11)</h4>
                <p>The primary playground offers more challenging equipment including climbing structures, swings,
                    slides, monkey bars, and balance beams. We also have areas for ball games, skipping, and tag. The
                    design encourages physical activity, social interaction, and imaginative play.</p>

                <h4>Secondary Recreation Area (Ages 12-16)</h4>
                <p>Older students have access to a recreation area with fitness equipment, basketball courts, and spaces
                    for socializing. This area is designed to meet the recreational needs of teenagers while promoting
                    physical fitness and positive social interactions.</p>

                <h3>Play Value</h3>
                <p>Our playgrounds are designed to offer diverse play experiences that support various aspects of
                    development:</p>
                <ul>
                    <li><strong>Physical Development:</strong> Climbing, swinging, and running build strength,
                        coordination, and motor skills</li>
                    <li><strong>Social Development:</strong> Playgrounds provide opportunities for making friends,
                        negotiating rules, and resolving conflicts</li>
                    <li><strong>Cognitive Development:</strong> Imaginative play and problem-solving on playground
                        equipment enhance thinking skills</li>
                    <li><strong>Emotional Development:</strong> Play helps children manage emotions, build confidence,
                        and develop resilience</li>
                    <li><strong>Creativity:</strong> Open-ended play structures encourage imaginative play and creative
                        thinking</li>
                </ul>

                <h3>Safety Standards</h3>
                <p>Safety is our top priority in all playground areas. We adhere to international safety standards for
                    playground design and equipment. Our playgrounds feature:</p>
                <ul>
                    <li>Impact-absorbing surfacing under all equipment</li>
                    <li>Age-appropriate equipment with proper guardrails and handrails</li>
                    <li>Regular safety inspections and maintenance</li>
                    <li>Clear sightlines for supervision</li>
                    <li>Safety rules taught to all students</li>
                    <li>Trained staff supervising play areas</li>
                </ul>

                <h3>Inclusive Design</h3>
                <p>We strive to make our playgrounds inclusive for children of all abilities. This includes accessible
                    pathways, transfer points for wheelchair users, and sensory play elements that engage children with
                    different needs and preferences.</p>

                <h3>Nature Integration</h3>
                <p>Our playgrounds incorporate natural elements including trees for shade, gardens for exploration, and
                    natural materials for play. These connections to nature enhance the play experience and promote
                    environmental awareness.</p>

                <div style="margin-top: 2rem;">
                    <button class="btn" id="inquirePlaygroundBtn">Learn More About Our Facilities</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Application Form Modal -->
    <div class="modal" id="applicationModal">
        <div class="modal-content">
            <div class="modal-header">
                <h2>Admission Application Form</h2>
                <button class="modal-close">&times;</button>
            </div>
            <div class="modal-body">
                <h3>Apply to HisGrace Schools</h3>
                <p>Please complete the form below to apply for admission to HisGrace Schools. All fields marked with an
                    asterisk (*) are required.</p>

                <form id="applicationForm">
                    <div class="form-group">
                        <label for="studentName">Student's Full Name *</label>
                        <input type="text" id="studentName" class="form-control" required>
                    </div>

                    <div class="form-row">
                        <div class="form-group">
                            <label for="dateOfBirth">Date of Birth *</label>
                            <input type="date" id="dateOfBirth" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="gender">Gender *</label>
                            <select id="gender" class="form-control" required>
                                <option value="">Select Gender</option>
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="ageGroup">Age Group Applying For *</label>
                        <select id="ageGroup" class="form-control" required>
                            <option value="">Select Age Group</option>
                            <option value="early-years">Early Years (Ages 2-5)</option>
                            <option value="primary">Primary (Ages 6-11)</option>
                            <option value="junior-secondary">Junior Secondary (Ages 12-14)</option>
                            <option value="senior-secondary">Senior Secondary (Ages 15-16)</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="previousSchool">Previous School (if applicable)</label>
                        <input type="text" id="previousSchool" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="parentName">Parent/Guardian Full Name *</label>
                        <input type="text" id="parentName" class="form-control" required>
                    </div>

                    <div class="form-row">
                        <div class="form-group">
                            <label for="parentEmail">Email Address *</label>
                            <input type="email" id="parentEmail" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="parentPhone">Phone Number *</label>
                            <input type="tel" id="parentPhone" class="form-control" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="address">Residential Address *</label>
                        <textarea id="address" class="form-control" required></textarea>
                    </div>

                    <div class="form-group">
                        <label for="emergencyContact">Emergency Contact (Name, Relationship, Phone) *</label>
                        <input type="text" id="emergencyContact" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label for="medicalInfo">Medical Information (Allergies, Conditions, Medications)</label>
                        <textarea id="medicalInfo" class="form-control"></textarea>
                    </div>

                    <div class="form-group">
                        <label for="howDidYouHear">How did you hear about HisGrace Schools?</label>
                        <select id="howDidYouHear" class="form-control">
                            <option value="">Select an option</option>
                            <option value="friend">Friend/Family Recommendation</option>
                            <option value="social-media">Social Media</option>
                            <option value="search-engine">Search Engine</option>
                            <option value="advertisement">Advertisement</option>
                            <option value="event">School Event</option>
                            <option value="other">Other</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="additionalInfo">Additional Information</label>
                        <textarea id="additionalInfo" class="form-control"
                            placeholder="Any other information you would like to share"></textarea>
                    </div>

                    <div class="form-group">
                        <div style="display: flex; align-items: flex-start;">
                            <input type="checkbox" id="agreement" style="margin-right: 10px; margin-top: 5px;" required>
                            <label for="agreement">I certify that the information provided is accurate and complete. I
                                understand that any false information may result in disqualification of the application.
                                *</label>
                        </div>
                    </div>

                    <div style="margin-top: 2rem;">
                        <button type="submit" class="btn">Submit Application</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Schedule Visit Modal -->
    <div class="modal" id="scheduleVisitModal">
        <div class="modal-content">
            <div class="modal-header">
                <h2>Schedule a School Visit</h2>
                <button class="modal-close">&times;</button>
            </div>
            <div class="modal-body">
                <h3>Experience HisGrace Schools</h3>
                <p>We invite you to visit our campus and experience the vibrant learning environment at HisGrace
                    Schools. During your visit, you'll have the opportunity to tour our facilities, observe classes in
                    action, and meet our dedicated staff.</p>

                <form id="visitForm">
                    <div class="form-group">
                        <label for="visitName">Your Full Name *</label>
                        <input type="text" id="visitName" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label for="visitEmail">Email Address *</label>
                        <input type="email" id="visitEmail" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label for="visitPhone">Phone Number *</label>
                        <input type="tel" id="visitPhone" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label for="visitStudent">Student's Name(s) and Age(s) *</label>
                        <input type="text" id="visitStudent" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label for="visitDate">Preferred Visit Date *</label>
                        <input type="date" id="visitDate" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label for="visitTime">Preferred Visit Time *</label>
                        <select id="visitTime" class="form-control" required>
                            <option value="">Select a time</option>
                            <option value="9:00 AM">9:00 AM</option>
                            <option value="10:00 AM">10:00 AM</option>
                            <option value="11:00 AM">11:00 AM</option>
                            <option value="1:00 PM">1:00 PM</option>
                            <option value="2:00 PM">2:00 PM</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="visitInterest">Areas of Interest</label>
                        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 10px; margin-top: 10px;">
                            <div style="display: flex; align-items: center;">
                                <input type="checkbox" id="interest-early-years" style="margin-right: 10px;">
                                <label for="interest-early-years">Early Years</label>
                            </div>
                            <div style="display: flex; align-items: center;">
                                <input type="checkbox" id="interest-primary" style="margin-right: 10px;">
                                <label for="interest-primary">Primary</label>
                            </div>
                            <div style="display: flex; align-items: center;">
                                <input type="checkbox" id="interest-secondary" style="margin-right: 10px;">
                                <label for="interest-secondary">Secondary</label>
                            </div>
                            <div style="display: flex; align-items: center;">
                                <input type="checkbox" id="interest-facilities" style="margin-right: 10px;">
                                <label for="interest-facilities">Facilities</label>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="visitQuestions">Questions or Special Requests</label>
                        <textarea id="visitQuestions" class="form-control"></textarea>
                    </div>

                    <div style="margin-top: 2rem;">
                        <button type="submit" class="btn">Schedule Visit</button>
                    </div>
                </form>

                <div
                    style="margin-top: 2rem; padding: 1rem; background-color: rgba(67, 97, 238, 0.1); border-radius: 10px;">
                    <h4>Visit Information</h4>
                    <p><strong>Duration:</strong> Approximately 1-2 hours</p>
                    <p><strong>What to Expect:</strong> Campus tour, classroom observations, meeting with admissions
                        staff</p>
                    <p><strong>What to Bring:</strong> Questions about our programs, any relevant documents</p>
                    <p><strong>Cancellation Policy:</strong> Please provide at least 24 hours notice if you need to
                        reschedule or cancel your visit.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Navigation Drawer -->
    <div class="nav-drawer" id="navDrawer">
        <div class="drawer-header">
            <h3>Menu</h3>
            <button class="drawer-close" id="drawerCloseBtn">&times;</button>
        </div>
        <div class="drawer-content">
            <ul class="drawer-menu">
                <li><a href="#" class="drawer-link" data-page="home"><i class="fas fa-home"></i> Home</a></li>
                <li><a href="#" class="drawer-link" data-page="about"><i class="fas fa-info-circle"></i> About Us</a>
                </li>
                <li><a href="#" class="drawer-link" data-page="programs"><i class="fas fa-book"></i> Programs</a></li>
                <li><a href="#" class="drawer-link" data-page="admissions"><i class="fas fa-user-graduate"></i>
                        Admissions</a></li>
                <li><a href="#" class="drawer-link" data-page="facilities"><i class="fas fa-school"></i> Facilities</a>
                </li>
                <li><a href="#" class="drawer-link" data-page="calendar"><i class="fas fa-calendar-alt"></i> School
                        Calendar</a></li>
                <li><a href="#" class="drawer-link" data-page="gallery"><i class="fas fa-images"></i> Gallery</a></li>
                <li><a href="#" class="drawer-link" data-page="contact"><i class="fas fa-envelope"></i> Contact Us</a>
                </li>
                <li><a href="https://hisgracegroupofschools.com.ng/student/login" target="_blank"><i
                            class="fas fa-sign-in-alt"></i> Student Portal</a></li>
            </ul>
        </div>
    </div>

    <!-- Bottom Sheet for Mobile -->
    <div class="bottom-sheet" id="bottomSheet">
        <div class="sheet-header">
            <div class="sheet-handle" id="sheetHandle"></div>
        </div>
        <div class="sheet-title">
            <h3 id="sheetTitle">Title</h3>
        </div>
        <div class="sheet-content" id="sheetContent">
            <!-- Content will be dynamically inserted here -->
        </div>
    </div>

    <!-- Scripts -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        // Initialize AOS
        AOS.init({
            duration: 1000,
            once: true
        });

        // DOM Elements
        const mobileMenuBtn = document.getElementById('mobileMenuBtn');
        const navDrawer = document.getElementById('navDrawer');
        const drawerCloseBtn = document.getElementById('drawerCloseBtn');
        const bottomSheet = document.getElementById('bottomSheet');
        const sheetHandle = document.getElementById('sheetHandle');
        const sheetTitle = document.getElementById('sheetTitle');
        const sheetContent = document.getElementById('sheetContent');

        // Modal Elements
        const modals = document.querySelectorAll('.modal');
        const modalCloseBtns = document.querySelectorAll('.modal-close');

        // Navigation Links
        const navLinks = document.querySelectorAll('.nav-link');
        const drawerLinks = document.querySelectorAll('.drawer-link');
        const footerLinks = document.querySelectorAll('.footer-link');

        // Button Elements
        const joinFamilyBtn = document.getElementById('joinFamilyBtn');
        const scheduleVisitBtn = document.getElementById('scheduleVisitBtn');
        const discoverStoryBtn = document.getElementById('discoverStoryBtn');
        const applyAdmissionBtn = document.getElementById('applyAdmissionBtn');
        const startApplicationBtn = document.getElementById('startApplicationBtn');
        const inquireEarlyYearsBtn = document.getElementById('inquireEarlyYearsBtn');
        const inquirePrimaryBtn = document.getElementById('inquirePrimaryBtn');
        const inquireJuniorSecondaryBtn = document.getElementById('inquireJuniorSecondaryBtn');
        const inquireSeniorSecondaryBtn = document.getElementById('inquireSeniorSecondaryBtn');
        const inquireSTEMBtn = document.getElementById('inquireSTEMBtn');
        const inquireArtsBtn = document.getElementById('inquireArtsBtn');
        const inquireSportsBtn = document.getElementById('inquireSportsBtn');
        const inquireScienceLabsBtn = document.getElementById('inquireScienceLabsBtn');
        const inquireArtsCenterBtn = document.getElementById('inquireArtsCenterBtn');
        const inquireLibraryBtn = document.getElementById('inquireLibraryBtn');
        const inquirePlaygroundBtn = document.getElementById('inquirePlaygroundBtn');

        // Age Card Elements
        const ageCards = document.querySelectorAll('.age-card');

        // Program Card Elements
        const programCards = document.querySelectorAll('.program-card');

        // Activity Elements
        const activities = document.querySelectorAll('.activity');

        // Gallery Elements
        const galleryItems = document.querySelectorAll('.gallery-item');
        const galleryItemSmalls = document.querySelectorAll('.gallery-item-small');

        // Forms
        const contactForm = document.getElementById('contactForm');
        const applicationForm = document.getElementById('applicationForm');
        const visitForm = document.getElementById('visitForm');

        // Testimonial Elements
        const testimonials = document.querySelectorAll('.testimonial');
        const navDots = document.querySelectorAll('.nav-dot');
        let currentTestimonial = 0;

        // Mobile Menu Toggle
        mobileMenuBtn.addEventListener('click', () => {
            navDrawer.classList.add('open');
        });

        drawerCloseBtn.addEventListener('click', () => {
            navDrawer.classList.remove('open');
        });

        // Close drawer when clicking on a link
        drawerLinks.forEach(link => {
            link.addEventListener('click', () => {
                navDrawer.classList.remove('open');
                const page = link.getAttribute('data-page');
                openPage(page);
            });
        });

        // Bottom Sheet Functionality
        sheetHandle.addEventListener('click', () => {
            bottomSheet.classList.toggle('open');
        });

        // Modal Functions
        function openModal(modalId) {
            const modal = document.getElementById(modalId);
            modal.classList.add('show');
            document.body.style.overflow = 'hidden';
        }

        function closeModal() {
            modals.forEach(modal => {
                modal.classList.remove('show');
            });
            document.body.style.overflow = '';
        }

        // Close modals when clicking the close button
        modalCloseBtns.forEach(btn => {
            btn.addEventListener('click', closeModal);
        });

        // Close modals when clicking outside the modal content
        modals.forEach(modal => {
            modal.addEventListener('click', (e) => {
                if (e.target === modal) {
                    closeModal();
                }
            });
        });

        // Page Navigation
        function openPage(page) {
            if (window.innerWidth <= 768) {
                // Use bottom sheet for mobile
                openBottomSheet(page);
            } else {
                // Use modal for desktop
                switch (page) {
                    case 'about':
                        openModal('aboutModal');
                        break;
                    case 'programs':
                        openModal('programsModal');
                        break;
                    case 'admissions':
                        openModal('admissionsModal');
                        break;
                    case 'facilities':
                        openModal('facilitiesModal');
                        break;
                    case 'calendar':
                        openModal('calendarModal');
                        break;
                    case 'gallery':
                        openModal('galleryModal');
                        break;
                    case 'contact':
                        openModal('contactModal');
                        break;
                    default:
                        closeModal();
                }
            }
        }

        // Bottom Sheet Content
        function openBottomSheet(page) {
            let title = '';
            let content = '';

            switch (page) {
                case 'about':
                    title = 'About HisGrace Schools';
                    content = `
                        <p>Founded in 1995, HisGrace Schools began with a simple vision: to create a learning environment where children could grow academically, spiritually, and emotionally in a nurturing setting.</p>
                        <h4>Our Mission</h4>
                        <p>To provide holistic education that nurtures the intellectual, spiritual, physical, and social development of every child.</p>
                        <h4>Our Vision</h4>
                        <p>To be a leading educational institution recognized for academic excellence, character development, and innovation in teaching methods.</p>
                        <button class="btn" id="aboutMoreBtn">Learn More</button>
                    `;
                    break;
                case 'programs':
                    title = 'Our Programs';
                    content = `
                        <p>Our academic curriculum is designed to meet the needs of students at different developmental stages while maintaining high standards of excellence.</p>
                        <h4>Age Groups</h4>
                        <ul>
                            <li>Early Years (Ages 2-5)</li>
                            <li>Primary (Ages 6-11)</li>
                            <li>Junior Secondary (Ages 12-14)</li>
                            <li>Senior Secondary (Ages 15-16)</li>
                        </ul>
                        <h4>Enrichment Programs</h4>
                        <ul>
                            <li>STEM Education</li>
                            <li>Creative Arts</li>
                            <li>Sports & Athletics</li>
                            <li>Languages & Cultural Studies</li>
                        </ul>
                        <button class="btn" id="programsMoreBtn">Learn More</button>
                    `;
                    break;
                case 'admissions':
                    title = 'Admissions';
                    content = `
                        <p>Joining the HisGrace Schools family is a simple and straightforward process. We welcome students from all backgrounds who are eager to learn and grow.</p>
                        <h4>Admission Process</h4>
                        <ol>
                            <li>Inquiry</li>
                            <li>School Visit</li>
                            <li>Application</li>
                            <li>Assessment</li>
                            <li>Admission Decision</li>
                            <li>Enrollment</li>
                        </ol>
                        <button class="btn" id="admissionsMoreBtn">Learn More</button>
                        <button class="btn btn-outline" id="applyNowBtn">Apply Now</button>
                    `;
                    break;
                case 'facilities':
                    title = 'Our Facilities';
                    content = `
                        <p>At HisGrace Schools, we've created a stimulating and safe environment where students can learn, play, and grow.</p>
                        <h4>Key Facilities</h4>
                        <ul>
                            <li>Colorful Classrooms</li>
                            <li>Science Laboratories</li>
                            <li>Computer Labs</li>
                            <li>Library & Resource Center</li>
                            <li>Art Studios</li>
                            <li>Music Rooms</li>
                            <li>Sports Fields</li>
                            <li>Swimming Pool</li>
                            <li>Playgrounds</li>
                        </ul>
                        <button class="btn" id="facilitiesMoreBtn">Learn More</button>
                    `;
                    break;
                case 'calendar':
                    title = 'School Calendar';
                    content = `
                        <h4>First Term</h4>
                        <ul>
                            <li><strong>Sep 11:</strong> Resumption</li>
                            <li><strong>Oct 16-20:</strong> Mid-Term Break</li>
                            <li><strong>Dec 15:</strong> End of Term</li>
                        </ul>
                        <h4>Second Term</h4>
                        <ul>
                            <li><strong>Jan 9:</strong> Resumption</li>
                            <li><strong>Feb 12-16:</strong> Mid-Term Break</li>
                            <li><strong>Apr 5:</strong> End of Term</li>
                        </ul>
                        <h4>Third Term</h4>
                        <ul>
                            <li><strong>Apr 23:</strong> Resumption</li>
                            <li><strong>Jun 17-21:</strong> Mid-Term Break</li>
                            <li><strong>Jul 20:</strong> End of Term</li>
                        </ul>
                        <button class="btn" id="calendarMoreBtn">View Full Calendar</button>
                    `;
                    break;
                case 'gallery':
                    title = 'Photo Gallery';
                    content = `
                        <div style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 10px;">
                            <img src="{{asset('school-images/hgs4.webp')}}" alt="School" style="width: 100%; height: 120px; object-fit: cover; border-radius: 8px;">
                            <img src="{{asset('school-images/hgs3.webp')}}" alt="Students" style="width: 100%; height: 120px; object-fit: cover; border-radius: 8px;">
                            <img src="{{asset('school-images/hgs2.webp')}}" alt="Sports" style="width: 100%; height: 120px; object-fit: cover; border-radius: 8px;">
                            <img src="{{asset('school-images/hgs1.webp')}}" alt="Science" style="width: 100%; height: 120px; object-fit: cover; border-radius: 8px;">
                        </div>
                        <button class="btn" id="galleryMoreBtn">View Full Gallery</button>
                    `;
                    break;
                case 'contact':
                    title = 'Contact Us';
                    content = `
                        <div class="contact-item">
                            <i class="fas fa-map-marker-alt"></i>
                            <div>
                                <p>NO 70B, BESIDE HERALD NEWSPAPER</p>
                                <p>ILORIN, KWARA STATE</p>
                            </div>
                        </div>
                        <div class="contact-item">
                            <i class="fas fa-phone"></i>
                            <div>
                                <p>09075975835</p>
                                <p>08185648398</p>
                            </div>
                        </div>
                        <div class="contact-item">
                            <i class="fas fa-envelope"></i>
                            <div>
                                <p>info@hisgraceschools.com</p>
                                <p>admissions@hisgraceschools.com</p>
                            </div>
                        </div>
                        <button class="btn" id="contactMoreBtn">Send Message</button>
                        <button class="btn btn-outline" id="scheduleVisitSheetBtn">Schedule Visit</button>
                    `;
                    break;
                default:
                    bottomSheet.classList.remove('open');
                    return;
            }

            sheetTitle.textContent = title;
            sheetContent.innerHTML = content;
            bottomSheet.classList.add('open');

            // Add event listeners to buttons in bottom sheet
            setTimeout(() => {
                const aboutMoreBtn = document.getElementById('aboutMoreBtn');
                const programsMoreBtn = document.getElementById('programsMoreBtn');
                const admissionsMoreBtn = document.getElementById('admissionsMoreBtn');
                const applyNowBtn = document.getElementById('applyNowBtn');
                const facilitiesMoreBtn = document.getElementById('facilitiesMoreBtn');
                const calendarMoreBtn = document.getElementById('calendarMoreBtn');
                const galleryMoreBtn = document.getElementById('galleryMoreBtn');
                const contactMoreBtn = document.getElementById('contactMoreBtn');
                const scheduleVisitSheetBtn = document.getElementById('scheduleVisitSheetBtn');

                if (aboutMoreBtn) {
                    aboutMoreBtn.addEventListener('click', () => {
                        bottomSheet.classList.remove('open');
                        openModal('aboutModal');
                    });
                }

                if (programsMoreBtn) {
                    programsMoreBtn.addEventListener('click', () => {
                        bottomSheet.classList.remove('open');
                        openModal('programsModal');
                    });
                }

                if (admissionsMoreBtn) {
                    admissionsMoreBtn.addEventListener('click', () => {
                        bottomSheet.classList.remove('open');
                        openModal('admissionsModal');
                    });
                }

                if (applyNowBtn) {
                    applyNowBtn.addEventListener('click', () => {
                        bottomSheet.classList.remove('open');
                        openModal('applicationModal');
                    });
                }

                if (facilitiesMoreBtn) {
                    facilitiesMoreBtn.addEventListener('click', () => {
                        bottomSheet.classList.remove('open');
                        openModal('facilitiesModal');
                    });
                }

                if (calendarMoreBtn) {
                    calendarMoreBtn.addEventListener('click', () => {
                        bottomSheet.classList.remove('open');
                        openModal('calendarModal');
                    });
                }

                if (galleryMoreBtn) {
                    galleryMoreBtn.addEventListener('click', () => {
                        bottomSheet.classList.remove('open');
                        openModal('galleryModal');
                    });
                }

                if (contactMoreBtn) {
                    contactMoreBtn.addEventListener('click', () => {
                        bottomSheet.classList.remove('open');
                        openModal('contactModal');
                    });
                }

                if (scheduleVisitSheetBtn) {
                    scheduleVisitSheetBtn.addEventListener('click', () => {
                        bottomSheet.classList.remove('open');
                        openModal('scheduleVisitModal');
                    });
                }
            }, 100);
        }

        // Navigation Link Click Handlers
        navLinks.forEach(link => {
            link.addEventListener('click', (e) => {
                e.preventDefault();
                const page = link.getAttribute('data-page');
                openPage(page);
            });
        });

        footerLinks.forEach(link => {
            link.addEventListener('click', (e) => {
                e.preventDefault();
                const page = link.getAttribute('data-page');
                openPage(page);
            });
        });

        // Button Click Handlers
        joinFamilyBtn.addEventListener('click', () => {
            openModal('admissionsModal');
        });

        scheduleVisitBtn.addEventListener('click', () => {
            openModal('scheduleVisitModal');
        });

        discoverStoryBtn.addEventListener('click', () => {
            openModal('aboutModal');
        });

        applyAdmissionBtn.addEventListener('click', () => {
            openModal('applicationModal');
        });

        startApplicationBtn.addEventListener('click', () => {
            closeModal();
            openModal('applicationModal');
        });

        // Age Card Click Handlers
        ageCards.forEach(card => {
            card.addEventListener('click', () => {
                const age = card.getAttribute('data-age');
                switch (age) {
                    case 'early-years':
                        openModal('earlyYearsModal');
                        break;
                    case 'primary':
                        openModal('primaryModal');
                        break;
                    case 'junior-secondary':
                        openModal('juniorSecondaryModal');
                        break;
                    case 'senior-secondary':
                        openModal('seniorSecondaryModal');
                        break;
                }
            });
        });

        // Program Card Click Handlers
        programCards.forEach(card => {
            card.addEventListener('click', () => {
                const program = card.getAttribute('data-program');
                switch (program) {
                    case 'stem':
                        openModal('stemModal');
                        break;
                    case 'arts':
                        openModal('artsModal');
                        break;
                    case 'sports':
                        openModal('sportsModal');
                        break;
                }
            });
        });

        // Activity Click Handlers
        activities.forEach(activity => {
            activity.addEventListener('click', () => {
                const activityName = activity.getAttribute('data-activity');
                switch (activityName) {
                    case 'science-labs':
                        openModal('scienceLabsModal');
                        break;
                    case 'arts-center':
                        openModal('artsCenterModal');
                        break;
                    case 'library':
                        openModal('libraryModal');
                        break;
                    case 'playground':
                        openModal('playgroundModal');
                        break;
                }
            });
        });

        // Gallery Click Handlers
        galleryItems.forEach(item => {
            item.addEventListener('click', () => {
                openModal('galleryModal');
            });
        });

        galleryItemSmalls.forEach(item => {
            item.addEventListener('click', () => {
                openModal('galleryModal');
            });
        });

        // Inquire Button Handlers
        inquireEarlyYearsBtn.addEventListener('click', () => {
            closeModal();
            openModal('applicationModal');
        });

        inquirePrimaryBtn.addEventListener('click', () => {
            closeModal();
            openModal('applicationModal');
        });

        inquireJuniorSecondaryBtn.addEventListener('click', () => {
            closeModal();
            openModal('applicationModal');
        });

        inquireSeniorSecondaryBtn.addEventListener('click', () => {
            closeModal();
            openModal('applicationModal');
        });

        inquireSTEMBtn.addEventListener('click', () => {
            closeModal();
            openModal('applicationModal');
        });

        inquireArtsBtn.addEventListener('click', () => {
            closeModal();
            openModal('applicationModal');
        });

        inquireSportsBtn.addEventListener('click', () => {
            closeModal();
            openModal('applicationModal');
        });

        inquireScienceLabsBtn.addEventListener('click', () => {
            closeModal();
            openModal('facilitiesModal');
        });

        inquireArtsCenterBtn.addEventListener('click', () => {
            closeModal();
            openModal('facilitiesModal');
        });

        inquireLibraryBtn.addEventListener('click', () => {
            closeModal();
            openModal('facilitiesModal');
        });

        inquirePlaygroundBtn.addEventListener('click', () => {
            closeModal();
            openModal('facilitiesModal');
        });

        // Form Handlers
        contactForm.addEventListener('submit', (e) => {
            e.preventDefault();
            // Show success message
            const formContainer = contactForm.parentElement;
            formContainer.innerHTML = `
                <div style="text-align: center; padding: 2rem;">
                    <i class="fas fa-check-circle" style="font-size: 3rem; color: var(--success-color); margin-bottom: 1rem;"></i>
                    <h3>Message Sent Successfully!</h3>
                    <p>Thank you for contacting HisGrace Schools. We have received your message and will get back to you shortly.</p>
                    <button class="btn" onclick="closeModal()">Close</button>
                </div>
            `;
        });

        applicationForm.addEventListener('submit', (e) => {
            e.preventDefault();
            // Show success message
            const formContainer = applicationForm.parentElement;
            formContainer.innerHTML = `
                <div style="text-align: center; padding: 2rem;">
                    <i class="fas fa-check-circle" style="font-size: 3rem; color: var(--success-color); margin-bottom: 1rem;"></i>
                    <h3>Application Submitted Successfully!</h3>
                    <p>Thank you for applying to HisGrace Schools. We have received your application and will contact you soon with the next steps.</p>
                    <button class="btn" onclick="closeModal()">Close</button>
                </div>
            `;
        });

        visitForm.addEventListener('submit', (e) => {
            e.preventDefault();
            // Show success message
            const formContainer = visitForm.parentElement;
            formContainer.innerHTML = `
                <div style="text-align: center; padding: 2rem;">
                    <i class="fas fa-check-circle" style="font-size: 3rem; color: var(--success-color); margin-bottom: 1rem;"></i>
                    <h3>Visit Scheduled Successfully!</h3>
                    <p>Thank you for scheduling a visit to HisGrace Schools. We have received your request and will confirm your visit shortly.</p>
                    <button class="btn" onclick="closeModal()">Close</button>
                </div>
            `;
        });

        // Testimonial Slider
        function showTestimonial(index) {
            testimonials.forEach(testimonial => {
                testimonial.classList.remove('active');
            });
            navDots.forEach(dot => {
                dot.classList.remove('active');
            });

            testimonials[index].classList.add('active');
            navDots[index].classList.add('active');
            currentTestimonial = index;
        }

        navDots.forEach((dot, index) => {
            dot.addEventListener('click', () => {
                showTestimonial(index);
            });
        });

        // Auto-rotate testimonials
        setInterval(() => {
            let nextIndex = (currentTestimonial + 1) % testimonials.length;
            showTestimonial(nextIndex);
        }, 5000);

        // Header scroll effect
        window.addEventListener('scroll', () => {
            const header = document.querySelector('header');
            if (window.scrollY > 100) {
                header.style.boxShadow = '0 5px 20px rgba(0, 0, 0, 0.1)';
            } else {
                header.style.boxShadow = '0 2px 15px rgba(0, 0, 0, 0.08)';
            }
        });

        // Add parallax effect to hero section
        window.addEventListener('scroll', () => {
            const scrollPosition = window.pageYOffset;
            const heroElements = document.querySelectorAll('.floating-element');

            heroElements.forEach((element, index) => {
                const speed = 0.5 + (index * 0.1);
                element.style.transform = `translateY(${scrollPosition * speed}px)`;
            });
        });

        // Close bottom sheet when clicking outside
        document.addEventListener('click', (e) => {
            if (bottomSheet.classList.contains('open') &&
                !bottomSheet.contains(e.target) &&
                e.target !== sheetHandle &&
                !e.target.closest('.nav-link') &&
                !e.target.closest('.footer-link')) {
                bottomSheet.classList.remove('open');
            }
        });
    </script>
</body>

</html>