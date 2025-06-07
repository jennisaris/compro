<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NexaCore | Innovative Tech Solutions</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        /* Custom CSS for animations and effects */
        .hero-gradient {
            background: linear-gradient(135deg, #3b82f6 0%, #1d4ed8 100%);
        }

        .service-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
        }

        .fade-in {
            animation: fadeIn 1s ease-in;
        }

        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }

        .scroll-down {
            animation: bounce 2s infinite;
        }

        @keyframes bounce {
            0%, 20%, 50%, 80%, 100% {transform: translateY(0);}
            40% {transform: translateY(-20px);}
            60% {transform: translateY(-10px);}
        }

        .testimonial-card {
            transition: all 0.3s ease;
        }

        .testimonial-card:hover {
            background-color: #f8fafc;
        }
    </style>
</head>
<body class="font-sans antialiased text-gray-800">
    <!-- Navigation -->
    <nav class="bg-white shadow-lg sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <div class="flex items-center">
                    <div class="flex-shrink-0 flex items-center">
                        <i class="fas fa-cube text-blue-600 text-2xl mr-2"></i>
                        <span class="text-xl font-bold text-gray-900">NexaCore</span>
                    </div>
                </div>
                <div class="hidden md:flex items-center space-x-8">
                    <a href="#home" class="text-gray-900 hover:text-blue-600 px-3 py-2 text-sm font-medium">Home</a>
                    <a href="#about" class="text-gray-900 hover:text-blue-600 px-3 py-2 text-sm font-medium">About</a>
                    <a href="#services" class="text-gray-900 hover:text-blue-600 px-3 py-2 text-sm font-medium">Services</a>
                    <a href="#team" class="text-gray-900 hover:text-blue-600 px-3 py-2 text-sm font-medium">Team</a>
                    <a href="#contact" class="text-gray-900 hover:text-blue-600 px-3 py-2 text-sm font-medium">Contact</a>
                </div>
                <div class="md:hidden flex items-center">
                    <button id="mobile-menu-button" class="text-gray-900 hover:text-blue-600 focus:outline-none">
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile menu -->
        <div id="mobile-menu" class="hidden md:hidden bg-white shadow-lg">
            <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3">
                <a href="#home" class="block px-3 py-2 text-base font-medium text-gray-900 hover:text-blue-600">Home</a>
                <a href="#about" class="block px-3 py-2 text-base font-medium text-gray-900 hover:text-blue-600">About</a>
                <a href="#services" class="block px-3 py-2 text-base font-medium text-gray-900 hover:text-blue-600">Services</a>
                <a href="#team" class="block px-3 py-2 text-base font-medium text-gray-900 hover:text-blue-600">Team</a>
                <a href="#contact" class="block px-3 py-2 text-base font-medium text-gray-900 hover:text-blue-600">Contact</a>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    @php $currentHero = $hero->first(); @endphp
    <section id="home" class="hero-gradient text-white py-20 md:py-32">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="md:flex items-center">
                <div class="md:w-1/2 mb-10 md:mb-0 fade-in">
                    <h1 class="text-4xl md:text-5xl font-bold mb-6">{{ $currentHero->title ?? 'Innovative Solutions for Your Digital Future' }}</h1>
                    <p class="text-xl mb-8 opacity-90">{{ $currentHero->subtitle ?? 'We help businesses transform through cutting-edge technology and strategic consulting.' }}</p>
                    <div class="flex space-x-4">
                        <a href="#contact" class="bg-white text-blue-600 hover:bg-gray-100 px-6 py-3 rounded-lg font-medium transition duration-300">Get Started</a>
                        <a href="#services" class="border-2 border-white text-white hover:bg-white hover:text-blue-600 px-6 py-3 rounded-lg font-medium transition duration-300">Our Services</a>
                    </div>
                </div>
                <div class="md:w-1/2 flex justify-center fade-in">
                    <img src="{{ $currentHero && $currentHero->image_path ? asset('storage/' . $currentHero->image_path) : 'https://images.unsplash.com/photo-1551288049-bebda4e38f71?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80' }}" alt="{{ $currentHero->title ?? 'Digital transformation' }}" class="rounded-lg shadow-2xl max-w-full h-auto">
                </div>
            </div>
        </div>
        <div class="text-center mt-16 scroll-down">
            <a href="#about" class="text-white text-2xl"><i class="fas fa-chevron-down"></i></a>
        </div>
    </section>

    <!-- About Section -->
    @php $currentAbout = $about->first(); @endphp
    <section id="about" class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl font-bold text-gray-900 mb-4">About NexaCore</h2>
                <div class="w-20 h-1 bg-blue-600 mx-auto mb-6"></div>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">We're a team of passionate innovators dedicated to helping businesses thrive in the digital age.</p>
            </div>

            <div class="md:flex items-center">
                <div class="md:w-1/2 mb-10 md:mb-0 pr-0 md:pr-10">
                    <img src="{{ $currentAbout && $currentAbout->image_path ? asset('storage/' . $currentAbout->image_path) : 'https://images.unsplash.com/photo-1522071820081-009f0129c71c?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80' }}" alt="{{ $currentAbout->title ?? 'Our team' }}" class="rounded-lg shadow-lg w-full">
                </div>
                <div class="md:w-1/2">
                    <h3 class="text-2xl font-semibold text-gray-900 mb-4">Our Story</h3>
                    <p class="text-gray-600 mb-6">{{ $currentAbout->content ?? 'Founded in 2015, NexaCore started as a small team of tech enthusiasts with a vision to bridge the gap between businesses and technology. Today, we\'ve grown into a full-service digital solutions provider with clients across multiple industries.' }}</p>

                    <h3 class="text-2xl font-semibold text-gray-900 mb-4">Our Mission</h3>
                    <p class="text-gray-600 mb-6">To empower businesses with innovative technology solutions that drive growth, efficiency, and competitive advantage in an increasingly digital world.</p>

                    <div class="grid grid-cols-2 gap-4 mb-6">
                        <div class="bg-white p-4 rounded-lg shadow-sm">
                            <i class="fas fa-bullseye text-blue-600 text-2xl mb-2"></i>
                            <h4 class="font-semibold">Our Vision</h4>
                            <p class="text-sm text-gray-600">To be the most trusted technology partner for businesses worldwide.</p>
                        </div>
                        <div class="bg-white p-4 rounded-lg shadow-sm">
                            <i class="fas fa-chart-line text-blue-600 text-2xl mb-2"></i>
                            <h4 class="font-semibold">Our Approach</h4>
                            <p class="text-sm text-gray-600">Data-driven strategies tailored to your unique business needs.</p>
                        </div>
                    </div>

                    <a href="#contact" class="inline-block bg-blue-600 hover:bg-blue-700 text-white px-6 py-3 rounded-lg font-medium transition duration-300">Learn More</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="py-12 bg-blue-600 text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8 text-center">
                <div>
                    <div class="text-4xl font-bold mb-2">150+</div>
                    <div class="text-sm uppercase tracking-wider">Happy Clients</div>
                </div>
                <div>
                    <div class="text-4xl font-bold mb-2">300+</div>
                    <div class="text-sm uppercase tracking-wider">Projects Completed</div>
                </div>
                <div>
                    <div class="text-4xl font-bold mb-2">40+</div>
                    <div class="text-sm uppercase tracking-wider">Team Members</div>
                </div>
                <div>
                    <div class="text-4xl font-bold mb-2">5</div>
                    <div class="text-sm uppercase tracking-wider">Years Experience</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl font-bold text-gray-900 mb-4">Our Services</h2>
                <div class="w-20 h-1 bg-blue-600 mx-auto mb-6"></div>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">Comprehensive solutions designed to meet your business needs.</p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                @forelse($services as $service)
                <div class="service-card bg-white p-8 rounded-lg shadow-md transition duration-300 hover:shadow-lg">
                    <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mb-6">
                        <i class="{{ $service->icon_class ?? 'fas fa-concierge-bell' }} text-blue-600 text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-4">{{ $service->title ?? 'Service Title' }}</h3>
                    <p class="text-gray-600 mb-4">{{ $service->description ?? 'Service description.' }}</p>
                    <a href="#" class="text-blue-600 font-medium inline-flex items-center">Learn More <i class="fas fa-arrow-right ml-2"></i></a>
                </div>
            @empty
                <div class="col-span-full text-center py-8">
                    <p class="text-gray-600 text-xl">No services available at the moment.</p>
                </div>
            @endforelse
            </div>
        </div>
    </section>

    <!-- Team Section -->
    <section id="team" class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl font-bold text-gray-900 mb-4">Meet Our Team</h2>
                <div class="w-20 h-1 bg-blue-600 mx-auto mb-6"></div>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">The brilliant minds behind our innovative solutions.</p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
                @forelse($teams as $teamMember)
                <div class="bg-white rounded-lg shadow-md overflow-hidden transition duration-300 hover:shadow-lg">
                    <img src="{{ $teamMember->image_path ? asset('storage/' . $teamMember->image_path) : 'https://via.placeholder.com/400x300.png?text=No+Image' }}" alt="{{ $teamMember->name ?? 'Team Member' }}" class="w-full h-64 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-semibold mb-1">{{ $teamMember->name ?? 'Team Member Name' }}</h3>
                        <p class="text-blue-600 mb-4">{{ $teamMember->position ?? 'Position' }}</p>
                        <p class="text-gray-600 text-sm">{{ $teamMember->bio ?? 'Short bio about the team member.' }}</p>
                        <div class="flex mt-4 space-x-3">
                            @if(!empty($teamMember->linkedin_url))
                                <a href="{{ $teamMember->linkedin_url }}" target="_blank" rel="noopener noreferrer" class="text-gray-500 hover:text-blue-600"><i class="fab fa-linkedin"></i></a>
                            @endif
                            @if(!empty($teamMember->twitter_url))
                                <a href="{{ $teamMember->twitter_url }}" target="_blank" rel="noopener noreferrer" class="text-gray-500 hover:text-blue-600"><i class="fab fa-twitter"></i></a>
                            @endif
                            @if(!empty($teamMember->email))
                                <a href="mailto:{{ $teamMember->email }}" class="text-gray-500 hover:text-blue-600"><i class="fas fa-envelope"></i></a>
                            @endif
                            {{-- Fallback if no social links from DB --}}
                            @if(empty($teamMember->linkedin_url) && empty($teamMember->twitter_url) && empty($teamMember->email))
                                <a href="#" class="text-gray-500 hover:text-blue-600"><i class="fab fa-linkedin"></i></a>
                                <a href="#" class="text-gray-500 hover:text-blue-600"><i class="fab fa-twitter"></i></a>
                                <a href="#" class="text-gray-500 hover:text-blue-600"><i class="fas fa-envelope"></i></a>
                            @endif
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-span-full text-center py-8">
                    <p class="text-gray-600 text-xl">Our team information is currently unavailable.</p>
                </div>
            @endforelse
            </div>

            <div class="text-center mt-12">
                <a href="#contact" class="inline-block bg-blue-600 hover:bg-blue-700 text-white px-6 py-3 rounded-lg font-medium transition duration-300">Join Our Team</a>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl font-bold text-gray-900 mb-4">What Our Clients Say</h2>
                <div class="w-20 h-1 bg-blue-600 mx-auto mb-6"></div>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">Trusted by businesses of all sizes across various industries.</p>
            </div>

            <div class="grid md:grid-cols-3 gap-8">
                <!-- Testimonial 1 -->
                <div class="testimonial-card bg-gray-50 p-8 rounded-lg">
                    <div class="flex items-center mb-4">
                        <div class="text-yellow-400 mr-2">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                    <p class="text-gray-600 mb-6">"NexaCore transformed our digital infrastructure, resulting in a 40% increase in operational efficiency. Their team is professional, knowledgeable, and truly cares about our success."</p>
                    <div class="flex items-center">
                        <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=687&q=80" alt="Robert Johnson" class="w-12 h-12 rounded-full object-cover mr-4">
                        <div>
                            <h4 class="font-semibold">Robert Johnson</h4>
                            <p class="text-sm text-gray-500">CEO, TechForward Inc.</p>
                        </div>
                    </div>
                </div>

                <!-- Testimonial 2 -->
                <div class="testimonial-card bg-gray-50 p-8 rounded-lg">
                    <div class="flex items-center mb-4">
                        <div class="text-yellow-400 mr-2">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                    <p class="text-gray-600 mb-6">"The mobile app developed by NexaCore exceeded our expectations. User engagement has doubled since launch, and their ongoing support has been exceptional."</p>
                    <div class="flex items-center">
                        <img src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" alt="Sarah Miller" class="w-12 h-12 rounded-full object-cover mr-4">
                        <div>
                            <h4 class="font-semibold">Sarah Miller</h4>
                            <p class="text-sm text-gray-500">CMO, Retail Solutions</p>
                        </div>
                    </div>
                </div>

                <!-- Testimonial 3 -->
                <div class="testimonial-card bg-gray-50 p-8 rounded-lg">
                    <div class="flex items-center mb-4">
                        <div class="text-yellow-400 mr-2">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                    <p class="text-gray-600 mb-6">"Their cybersecurity solutions protected us from multiple threats we didn't even know existed. The peace of mind is invaluable to our business operations."</p>
                    <div class="flex items-center">
                        <img src="https://images.unsplash.com/photo-1544725176-7c40e5a71c5e?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1467&q=80" alt="James Wilson" class="w-12 h-12 rounded-full object-cover mr-4">
                        <div>
                            <h4 class="font-semibold">James Wilson</h4>
                            <p class="text-sm text-gray-500">CIO, Financial Services Group</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl font-bold text-gray-900 mb-4">Get In Touch</h2>
                <div class="w-20 h-1 bg-blue-600 mx-auto mb-6"></div>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">We'd love to hear from you. Reach out to start a conversation.</p>
            </div>

            <div class="grid md:grid-cols-2 gap-12">
                <div>
                    <h3 class="text-2xl font-semibold mb-6">Contact Information</h3>

                    <div class="space-y-6">
                        <div class="flex items-start">
                            <div class="flex-shrink-0 bg-blue-100 rounded-lg p-3">
                                <i class="fas fa-map-marker-alt text-blue-600 text-xl"></i>
                            </div>
                            <div class="ml-4">
                                <h4 class="text-lg font-medium text-gray-900">Our Office</h4>
                                <p class="text-gray-600">{!! nl2br(e(optional($contactInfo)->address ?? '123 Tech Park Avenue\nSan Francisco, CA 94107')) !!}</p>
                            </div>
                        </div>

                        <div class="flex items-start">
                            <div class="flex-shrink-0 bg-blue-100 rounded-lg p-3">
                                <i class="fas fa-phone-alt text-blue-600 text-xl"></i>
                            </div>
                            <div class="ml-4">
                                <h4 class="text-lg font-medium text-gray-900">Phone</h4>
                                <p class="text-gray-600">{{ optional($contactInfo)->phone ?? '+1 (555) 123-4567' }}<br>Mon-Fri, 9am-5pm PST</p>
                            </div>
                        </div>

                        <div class="flex items-start">
                            <div class="flex-shrink-0 bg-blue-100 rounded-lg p-3">
                                <i class="fas fa-envelope text-blue-600 text-xl"></i>
                            </div>
                            <div class="ml-4">
                                <h4 class="text-lg font-medium text-gray-900">Email</h4>
                                <p class="text-gray-600">{{ optional($contactInfo)->email ?? 'info@nexacore.com' }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="mt-8">
                        <h4 class="text-lg font-medium mb-4">Follow Us</h4>
                        <div class="flex space-x-4">
                            <a href="#" class="bg-blue-600 text-white p-3 rounded-full hover:bg-blue-700 transition duration-300"><i class="fab fa-facebook-f"></i></a>
                            <a href="#" class="bg-blue-400 text-white p-3 rounded-full hover:bg-blue-500 transition duration-300"><i class="fab fa-twitter"></i></a>
                            <a href="#" class="bg-blue-700 text-white p-3 rounded-full hover:bg-blue-800 transition duration-300"><i class="fab fa-linkedin-in"></i></a>
                            <a href="#" class="bg-pink-600 text-white p-3 rounded-full hover:bg-pink-700 transition duration-300"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>

                <div>
                    <h3 class="text-2xl font-semibold mb-6">Send Us a Message</h3>
                    <form id="contactForm" method="POST" action="{{ route('contact.submit') }}" class="space-y-6">
@csrf
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label for="name" class="block text-sm font-medium text-gray-700 mb-1">Name</label>
                                <input type="text" id="name" name="name" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500" required>
                            </div>
                            <div>
                                <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email</label>
                                <input type="email" id="email" name="email" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500" required>
                            </div>
                        </div>
                        <div>
                            <label for="subject" class="block text-sm font-medium text-gray-700 mb-1">Subject</label>
                            <input type="text" id="subject" name="subject" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500" required>
                        </div>
                        <div>
                            <label for="message" class="block text-sm font-medium text-gray-700 mb-1">Message</label>
                            <textarea id="message" name="message" rows="4" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500" required></textarea>
                        </div>
                        <div>
                            <button type="submit" class="w-full bg-blue-600 hover:bg-blue-700 text-white px-6 py-3 rounded-lg font-medium transition duration-300">Send Message</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Newsletter Section -->
    <section class="py-16 bg-blue-600 text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="md:flex items-center justify-between">
                <div class="md:w-1/2 mb-6 md:mb-0">
                    <h3 class="text-2xl font-bold mb-2">Subscribe to Our Newsletter</h3>
                    <p>Get the latest tech insights and company news delivered to your inbox.</p>
                </div>
                <div class="md:w-1/2">
                    <form class="flex">
                        <input type="email" placeholder="Your email address" class="px-4 py-3 w-full rounded-l-lg focus:outline-none text-gray-900">
                        <button type="submit" class="bg-blue-800 hover:bg-blue-900 px-6 py-3 rounded-r-lg font-medium transition duration-300">Subscribe</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8">
                <div>
                    <h3 class="text-lg font-semibold mb-4">NexaCore</h3>
                    <p class="text-gray-400">Innovative technology solutions for the digital age.</p>
                    <div class="flex space-x-4 mt-4">
                        <a href="#" class="text-gray-400 hover:text-white"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="text-gray-400 hover:text-white"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="text-gray-400 hover:text-white"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#" class="text-gray-400 hover:text-white"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>

                <div>
                    <h3 class="text-lg font-semibold mb-4">Services</h3>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-400 hover:text-white">Custom Software</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Mobile Apps</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Cloud Solutions</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Data Analytics</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Cybersecurity</a></li>
                    </ul>
                </div>

                <div>
                    <h3 class="text-lg font-semibold mb-4">Company</h3>
                    <ul class="space-y-2">
                        <li><a href="#about" class="text-gray-400 hover:text-white">About Us</a></li>
                        <li><a href="#team" class="text-gray-400 hover:text-white">Our Team</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Careers</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Blog</a></li>
                        <li><a href="#contact" class="text-gray-400 hover:text-white">Contact</a></li>
                    </ul>
                </div>

                <div>
                    <h3 class="text-lg font-semibold mb-4">Legal</h3>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-400 hover:text-white">Privacy Policy</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Terms of Service</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Cookie Policy</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">GDPR Compliance</a></li>
                    </ul>
                </div>
            </div>

            <div class="border-t border-gray-800 mt-12 pt-8 flex flex-col md:flex-row justify-between items-center">
                <p class="text-gray-400 text-sm">© 2023 NexaCore Technologies. All rights reserved.</p>
                <div class="flex space-x-6 mt-4 md:mt-0">
                    <a href="#" class="text-gray-400 hover:text-white text-sm">Privacy Policy</a>
                    <a href="#" class="text-gray-400 hover:text-white text-sm">Terms of Service</a>
                    <a href="#" class="text-gray-400 hover:text-white text-sm">Sitemap</a>
                </div>
            </div>
        </div>
    </footer>

    <!-- Back to Top Button -->
    <button id="backToTop" class="fixed bottom-8 right-8 bg-blue-600 text-white p-3 rounded-full shadow-lg opacity-0 invisible transition-all duration-300 hover:bg-blue-700">
        <i class="fas fa-arrow-up"></i>
    </button>

    <!-- JavaScript -->
    <script>
        // Mobile menu toggle
        document.getElementById('mobile-menu-button').addEventListener('click', function() {
            const menu = document.getElementById('mobile-menu');
            menu.classList.toggle('hidden');
        });

        // Smooth scrolling for navigation links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();

                const targetId = this.getAttribute('href');
                const targetElement = document.querySelector(targetId);

                if (targetElement) {
                    window.scrollTo({
                        top: targetElement.offsetTop - 80, // Adjusted for sticky nav height
                        behavior: 'smooth'
                    });

                    // Close mobile menu if open
                    const mobileMenu = document.getElementById('mobile-menu');
                    if (!mobileMenu.classList.contains('hidden')) {
                        mobileMenu.classList.add('hidden');
                    }
                }
            });
        });

        // Back to top button
        const backToTopButton = document.getElementById('backToTop');

        window.addEventListener('scroll', function() {
            if (window.pageYOffset > 300) { // Show button after scrolling 300px
                backToTopButton.classList.remove('opacity-0', 'invisible');
                backToTopButton.classList.add('opacity-100', 'visible');
            } else {
                backToTopButton.classList.remove('opacity-100', 'visible');
                backToTopButton.classList.add('opacity-0', 'invisible');
            }
        });

        backToTopButton.addEventListener('click', function() {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });

        // Form submission (basic example)
        // Original contact form JS submission logic replaced by standard form submission to backend
        // document.getElementById('contactForm').addEventListener('submit', function(e) {
        //     // e.preventDefault(); // Removed to allow backend submission
        //     // const name = document.getElementById('name').value;
        //     // const email = document.getElementById('email').value;
        //     // const subject = document.getElementById('subject').value;
        //     // const message = document.getElementById('message').value;
        //     // alert(`Thank you, ${name}! Your message has been received. We'll contact you at ${email} soon.`);
        //     // this.reset();
        // });

        // Animation on scroll - improved for performance and initial state
        function animateOnScroll() {
            const elements = document.querySelectorAll('.fade-in'); // Use a more specific class if needed

            elements.forEach(element => {
                // Check if already animated to avoid re-triggering
                if (element.style.opacity === '1') return;

                const elementPosition = element.getBoundingClientRect().top;
                const screenPosition = window.innerHeight / 1.3; // Adjust trigger point

                if (elementPosition < screenPosition) {
                    element.style.opacity = '1';
                }
            });
        }

        // Set initial state for fade-in elements and attach listeners
        document.addEventListener('DOMContentLoaded', () => {
            document.querySelectorAll('.fade-in').forEach(el => {
                el.style.opacity = '0';
                el.style.transition = 'opacity 0.6s ease-out';
            });

            animateOnScroll(); // Initial check on load
            window.addEventListener('scroll', animateOnScroll);
        });
    </script>
</body>
</html>
