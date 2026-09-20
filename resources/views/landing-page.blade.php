
@php
    $navLinks = [
        ['label' => 'Features', 'href' => '#features'],
        ['label' => 'How It Works', 'href' => '#how-it-works'],
        ['label' => 'Pricing', 'href' => '#pricing'],
        ['label' => 'Testimonials', 'href' => '#testimonials'],
    ];

    $features = [
        [
            'title' => 'Unified Booking & Calendar',
            'desc' => 'One real-time calendar for all your services. Clients self-book online, staff see their day at a glance, and double-bookings become impossible.',
            'icon' => 'calendar',
        ],
        [
            'title' => 'Client & Pet History',
            'desc' => 'Complete profiles for every pet — breed, age, medical notes, service history, and owner preferences — accessible in seconds from any device.',
            'icon' => 'paw',
        ],
        [
            'title' => 'Automated Reminders',
            'desc' => 'SMS and email reminders fire automatically before appointments. Slash no-shows and keep your schedule full without lifting a finger.',
            'icon' => 'bell',
        ],
        [
            'title' => 'Staff Scheduling',
            'desc' => 'Assign services to specific team members, manage shifts, track availability, and prevent scheduling conflicts across your whole crew.',
            'icon' => 'users',
        ],
        [
            'title' => 'Payments & Invoicing',
            'desc' => 'Accept payments online or in-person. Auto-generate invoices, send receipts, and track revenue — all from the same dashboard.',
            'icon' => 'card',
        ],
        [
            'title' => 'Reports & Analytics',
            'desc' => 'Weekly revenue snapshots, busiest services, top clients, and staff performance — the numbers that actually help you grow.',
            'icon' => 'chart',
        ],
    ];

    $steps = [
        ['n' => '01', 'title' => 'Create your business profile', 'desc' => 'Sign up in minutes. Add your services, set your hours, and invite your staff.'],
        ['n' => '02', 'title' => 'Go live with online booking', 'desc' => 'Share your booking link. Clients book appointments, receive confirmations, and get automatic reminders.'],
        ['n' => '03', 'title' => 'Run your day from one screen', 'desc' => 'See all appointments, manage walk-ins, process payments, and review pet notes — everything in one place.'],
    ];

    $testimonials = [
        ['quote' => 'We cut no-shows by 60% in the first month. The automated reminders alone paid for the subscription.', 'name' => 'Maria Santos', 'role' => 'Owner, Paws & Claws Grooming', 'avatar' => 'MS', 'color' => '#10b981'],
        ['quote' => "Managing 8 groomers used to be a nightmare. PawDesk's staff calendar changed everything — I actually have weekends back.", 'name' => 'James Reyes', 'role' => 'Operations Lead, The Grooming Room', 'avatar' => 'JR', 'color' => '#6366f1'],
        ['quote' => "Our clients love being able to see their pet's history at every visit. It builds trust like nothing else.", 'name' => 'Andrea Lim', 'role' => 'Veterinarian, Companion Care Clinic', 'avatar' => 'AL', 'color' => '#f59e0b'],
    ];

    $plans = [
        [
            'name' => 'Starter', 'price' => '₱999', 'period' => '/ month',
            'desc' => 'Perfect for solo practitioners and small shops just getting started.',
            'features' => ['Up to 100 bookings/month', '1 staff account', 'Client & pet profiles', 'Email reminders', 'Basic invoicing'],
            'cta' => 'Start Free Trial', 'highlight' => false, 'badge' => null,
        ],
        [
            'name' => 'Growth', 'price' => '₱2,499', 'period' => '/ month',
            'desc' => 'For growing businesses ready to streamline operations at scale.',
            'features' => ['Unlimited bookings', 'Up to 10 staff accounts', 'SMS + email reminders', 'Payments & invoicing', 'Staff scheduling', 'Analytics dashboard'],
            'cta' => 'Start Free Trial', 'highlight' => true, 'badge' => 'Most Popular',
        ],
        [
            'name' => 'Enterprise', 'price' => 'Custom', 'period' => '',
            'desc' => 'Multi-location chains, franchises, and high-volume operations.',
            'features' => ['Unlimited everything', 'Unlimited staff accounts', 'Custom integrations', 'Dedicated account manager', 'Priority support', 'White-label option'],
            'cta' => 'Contact Sales', 'highlight' => false, 'badge' => null,
        ],
    ];

    $businessTypes = ['Pet Grooming', 'Veterinary Clinics', 'Dog Training', 'Pet Boarding', 'Doggy Daycare', 'Pet Sitting', 'Animal Shelters', 'Pet Photography'];

    $faqs = [
        ['q' => 'Who is PawDesk for?', 'a' => 'PawDesk is built for any pet service business — grooming salons, veterinary clinics, dog trainers, boarding facilities, daycares, pet sitters, and more. If you take appointments and manage pets, PawDesk is for you.'],
        ['q' => 'Can my customers book online?', 'a' => 'Yes. Every business on PawDesk gets a branded booking page. Your customers can book appointments, choose services, select staff, and receive confirmations — all without needing to call.'],
        ['q' => 'How does the free trial work?', 'a' => "You get 14 days free on any plan, no credit card required. After the trial you can upgrade, downgrade, or cancel. We'll remind you 3 days before the trial ends."],
        ['q' => 'Do I need to install anything?', 'a' => 'PawDesk is entirely web-based. You and your staff can access it from any browser on any device — desktop, tablet, or phone. No app download required.'],
        ['q' => 'Can I migrate my existing client data?', 'a' => "Yes. You can import clients and pet profiles from a CSV file, or our team can help you migrate data from another system. Contact us and we'll handle it."],
    ];

    $todaySchedule = [
        ['time' => '9:00 AM', 'pet' => 'Max (Golden Retriever)', 'service' => 'Full Groom', 'status' => 'done'],
        ['time' => '10:30 AM', 'pet' => 'Bella (Shih Tzu)', 'service' => 'Bath & Blowdry', 'status' => 'active'],
        ['time' => '12:00 PM', 'pet' => 'Luna (Poodle)', 'service' => 'Haircut', 'status' => 'upcoming'],
        ['time' => '2:00 PM', 'pet' => 'Mochi (Maltese)', 'service' => 'Full Groom', 'status' => 'upcoming'],
    ];

    $remindersSent = [
        ['name' => 'Jasmine R.', 'time' => '8:42 AM', 'method' => 'SMS'],
        ['name' => 'Marco D.', 'time' => '8:15 AM', 'method' => 'Email'],
        ['name' => 'Grace T.', 'time' => '7:50 AM', 'method' => 'SMS'],
        ['name' => 'Leo F.', 'time' => '7:30 AM', 'method' => 'Email'],
    ];

    $statCards = [
        ['label' => "Today's Appointments", 'value' => '14', 'delta' => '+3 vs yesterday'],
        ['label' => 'Revenue This Week', 'value' => '₱18,240', 'delta' => '+12% vs last week'],
        ['label' => 'Active Clients', 'value' => '387', 'delta' => '+8 this month'],
        ['label' => 'No-show Rate', 'value' => '3.2%', 'delta' => '↓ from 8.1%'],
    ];

    $heroStats = [
        ['n' => '2,400+', 'l' => 'Businesses'],
        ['n' => '180K+', 'l' => 'Appointments booked'],
        ['n' => '60%', 'l' => 'Fewer no-shows'],
        ['n' => '4.9 ★', 'l' => 'Average rating'],
    ];
@endphp
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PawDesk — Run your pet business without the chaos</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    {{-- Alpine.js: already bundled if you use Livewire; otherwise pull it in via npm ("alpinejs") and import in resources/js/app.js, or use the CDN tag below for a quick start. --}}
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>
<body class="bg-bg text-text font-body min-h-screen" x-data="{ navScrolled: false, mobileMenuOpen: false }" x-on:scroll.window="navScrolled = window.scrollY > 32">

    {{-- ── NAV ── --}}
    <nav
        class="fixed top-0 inset-x-0 z-50 transition-all duration-300 border-b"
        :class="navScrolled ? 'bg-bg/92 backdrop-blur-md border-border' : 'bg-transparent border-transparent'"
    >
        <div class="max-w-7xl mx-auto px-5 sm:px-8 flex items-center justify-between h-16">
            <a href="#" class="flex items-center gap-2.5 font-display font-bold text-xl tracking-tight">
                <span class="w-8 h-8 rounded-lg flex items-center justify-center text-sm font-bold bg-accent text-bg">P</span>
                <span>PawDesk</span>
            </a>

            {{-- Desktop links --}}
            <div class="hidden md:flex items-center gap-8">
                @foreach ($navLinks as $link)
                    <a href="{{ $link['href'] }}" class="text-sm text-muted hover:text-text transition-colors duration-150">
                        {{ $link['label'] }}
                    </a>
                @endforeach
            </div>

            <div class="hidden md:flex items-center gap-3">
                <a href="{{ route('login') }}" class="text-sm px-4 py-2 rounded-lg text-muted hover:text-text transition-colors duration-150">
                    Sign in
                </a>
                <a href="#pricing" class="text-sm px-4 py-2 rounded-lg font-medium bg-accent text-bg hover:bg-accent-dim transition-all duration-150">
                    Get Started Free
                </a>
            </div>

            {{-- Mobile hamburger --}}
            <button class="md:hidden p-2 rounded-lg text-muted" x-on:click="mobileMenuOpen = !mobileMenuOpen" aria-label="Toggle menu">
                <svg x-show="mobileMenuOpen" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" class="w-5 h-5">
                    <path d="M18 6L6 18M6 6l12 12" />
                </svg>
                <svg x-show="!mobileMenuOpen" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" class="w-5 h-5">
                    <path d="M3 6h18M3 12h18M3 18h18" />
                </svg>
            </button>
        </div>

        {{-- Mobile menu --}}
        <div x-show="mobileMenuOpen" x-transition class="md:hidden border-t border-border bg-bg" style="display: none;">
            <div class="px-5 py-4 flex flex-col gap-1">
                @foreach ($navLinks as $link)
                    <a href="{{ $link['href'] }}" x-on:click="mobileMenuOpen = false" class="py-3 text-sm text-muted border-b border-border">
                        {{ $link['label'] }}
                    </a>
                @endforeach
                <div class="pt-4 flex flex-col gap-2">
                    <a href="{{ route('login') }}" class="py-2.5 text-sm text-center rounded-lg border border-border text-text">
                        Sign in
                    </a>
                    <a href="#pricing" x-on:click="mobileMenuOpen = false" class="py-2.5 text-sm text-center rounded-lg font-medium bg-accent text-bg">
                        Get Started Free
                    </a>
                </div>
            </div>
        </div>
    </nav>

    {{-- ── HERO ── --}}
    <section class="relative min-h-screen flex flex-col items-center justify-center pt-24 pb-20 px-5 sm:px-8 overflow-hidden">
        <div class="absolute top-1/3 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[600px] h-[600px] rounded-full pointer-events-none"
             style="background: radial-gradient(ellipse, rgba(16,185,129,0.08) 0%, transparent 70%);"></div>
        <div class="absolute inset-0 pointer-events-none opacity-20"
             style="background-image: linear-gradient(#1f2d44 1px, transparent 1px), linear-gradient(90deg, #1f2d44 1px, transparent 1px); background-size: 64px 64px; mask-image: radial-gradient(ellipse 80% 60% at 50% 50%, black, transparent);"></div>

        <div class="relative max-w-4xl mx-auto text-center">
            <div class="inline-flex items-center gap-2 text-xs font-medium px-3 py-1.5 rounded-full mb-8 border border-accent/30 bg-accent/[0.07] text-accent">
                <span class="w-1.5 h-1.5 rounded-full bg-accent animate-pulse"></span>
                Built for pet service professionals
            </div>

            <h1 class="font-display font-bold leading-[1.05] tracking-tight mb-6 text-[clamp(2.5rem,7vw,5rem)]">
                Run your pet business
                <br>
                <span class="text-accent">without the chaos.</span>
            </h1>

            <p class="text-lg sm:text-xl leading-relaxed max-w-2xl mx-auto mb-10 text-muted">
                PawDesk gives groomers, vets, trainers, and daycares everything they need — bookings, reminders, pet records, staff scheduling, and payments — in one clean platform.
            </p>

            <div class="flex flex-col sm:flex-row items-center justify-center gap-3 mb-16">
                <a href="#pricing" class="w-full sm:w-auto px-7 py-3.5 rounded-xl font-medium text-sm bg-accent text-bg shadow-glow-accent hover:bg-accent-dim hover:shadow-glow-accent-lg transition-all duration-200">
                    Start your free trial
                </a>
                <a href="#how-it-works" class="w-full sm:w-auto px-7 py-3.5 rounded-xl font-medium text-sm border border-border text-muted hover:border-border-hover hover:text-text transition-all duration-200 flex items-center justify-center gap-2">
                    See how it works
                    <svg viewBox="0 0 16 16" fill="none" stroke="currentColor" stroke-width="1.5" class="w-4 h-4">
                        <path d="M3 8h10M9 4l4 4-4 4" />
                    </svg>
                </a>
            </div>

            {{-- Stats row --}}
            <div class="flex flex-wrap justify-center gap-px rounded-2xl overflow-hidden border border-border">
                @foreach ($heroStats as $stat)
                    <div class="flex-1 min-w-[120px] py-5 px-6 text-center bg-surface">
                        <div class="font-display font-bold text-xl text-accent">{{ $stat['n'] }}</div>
                        <div class="text-xs mt-0.5 text-muted">{{ $stat['l'] }}</div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- ── BUSINESS TYPES MARQUEE ── --}}
    <div class="border-y border-border py-4 overflow-hidden bg-surface">
        <div class="flex gap-8 items-center whitespace-nowrap marquee-track w-max">
            @foreach ([...$businessTypes, ...$businessTypes] as $type)
                <span class="flex items-center gap-3 text-sm font-medium text-muted-2">
                    <span class="w-1.5 h-1.5 rounded-full bg-accent shrink-0"></span>
                    {{ $type }}
                </span>
            @endforeach
        </div>
    </div>

    {{-- ── HERO IMAGE SPLIT ── --}}
    <section class="py-20 px-5 sm:px-8">
        <div class="max-w-7xl mx-auto grid grid-cols-1 lg:grid-cols-2 gap-8">
            <div class="relative rounded-2xl overflow-hidden bg-surface border border-border min-h-[360px]">
                <img
                    src="https://images.unsplash.com/photo-1719464454959-9cf304ef4774?w=800&h=600&fit=crop&auto=format"
                    alt="Professional pet groomer trimming a small white dog"
                    class="w-full h-full object-cover opacity-80 min-h-[360px]"
                >
                <div class="absolute inset-0" style="background: linear-gradient(to top, rgba(11,15,25,0.8) 0%, transparent 50%);"></div>
                <div class="absolute bottom-6 left-6 right-6">
                    <div class="inline-block text-xs font-medium px-3 py-1 rounded-full mb-2 bg-accent/[0.15] text-accent border border-accent/20">
                        For Business Owners
                    </div>
                    <p class="text-sm text-[#c8d4ec]">Full control. Less admin. More happy clients.</p>
                </div>
            </div>

            <div class="relative rounded-2xl overflow-hidden bg-surface border border-border min-h-[360px]">
                <img
                    src="https://images.unsplash.com/photo-1787152467585-3b6a11777ebd?w=800&h=600&fit=crop&auto=format"
                    alt="Dogs playing together at a daycare facility"
                    class="w-full h-full object-cover opacity-80 min-h-[360px]"
                >
                <div class="absolute inset-0" style="background: linear-gradient(to top, rgba(11,15,25,0.8) 0%, transparent 50%);"></div>
                <div class="absolute bottom-6 left-6 right-6">
                    <div class="inline-block text-xs font-medium px-3 py-1 rounded-full mb-2 bg-indigo/[0.15] text-indigo border border-indigo/20">
                        For Pet Owners
                    </div>
                    <p class="text-sm text-[#c8d4ec]">Easy booking. Transparent updates. Peace of mind.</p>
                </div>
            </div>
        </div>
    </section>

    {{-- ── FEATURES ── --}}
    <section id="features" class="py-24 px-5 sm:px-8">
        <div class="max-w-7xl mx-auto">
            <div class="max-w-2xl mb-16">
                <div class="text-xs font-medium tracking-widest uppercase mb-4 text-accent">Platform Features</div>
                <h2 class="font-display font-bold leading-tight mb-4 text-[clamp(1.875rem,4vw,3rem)]">
                    Every tool your pet business needs
                </h2>
                <p class="text-muted">
                    Stop stitching together five different apps. PawDesk replaces your scheduling tool, your reminder system, your invoicing software, and your pet record binder — all in one.
                </p>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
                @foreach ($features as $feature)
                    <div class="group p-6 rounded-2xl border border-border bg-surface hover:border-accent/30 hover:bg-[#13202f] transition-all duration-200 cursor-default">
                        <div class="w-11 h-11 rounded-xl flex items-center justify-center mb-5 bg-accent/10 text-accent">
                            @switch($feature['icon'])
                                @case('calendar')
                                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" class="w-6 h-6">
                                        <rect x="3" y="4" width="18" height="18" rx="2" /><path d="M3 9h18M9 3v2M15 3v2" />
                                        <circle cx="8" cy="14" r="1" fill="currentColor" /><circle cx="12" cy="14" r="1" fill="currentColor" /><circle cx="16" cy="14" r="1" fill="currentColor" />
                                    </svg>
                                    @break
                                @case('paw')
                                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" class="w-6 h-6">
                                        <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2z" />
                                        <path d="M8 14s1.5 2 4 2 4-2 4-2M9 9h.01M15 9h.01" />
                                    </svg>
                                    @break
                                @case('bell')
                                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" class="w-6 h-6">
                                        <path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9" />
                                        <path d="M13.73 21a2 2 0 0 1-3.46 0" />
                                    </svg>
                                    @break
                                @case('users')
                                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" class="w-6 h-6">
                                        <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2" /><circle cx="9" cy="7" r="4" />
                                        <path d="M23 21v-2a4 4 0 0 0-3-3.87M16 3.13a4 4 0 0 1 0 7.75" />
                                    </svg>
                                    @break
                                @case('card')
                                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" class="w-6 h-6">
                                        <rect x="2" y="5" width="20" height="14" rx="2" /><path d="M2 10h20" /><path d="M7 15h2M15 15h2" />
                                    </svg>
                                    @break
                                @case('chart')
                                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" class="w-6 h-6">
                                        <path d="M3 3h18v4H3zM3 11h18v4H3zM3 19h18v2H3z" /><polyline points="9,7 12,10 15,7" />
                                    </svg>
                                    @break
                            @endswitch
                        </div>
                        <h3 class="font-display font-semibold text-base mb-2">{{ $feature['title'] }}</h3>
                        <p class="text-sm leading-relaxed text-muted">{{ $feature['desc'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- ── HOW IT WORKS ── --}}
    <section id="how-it-works" class="py-24 px-5 sm:px-8 bg-surface border-t border-b border-border">
        <div class="max-w-7xl mx-auto">
            <div class="max-w-2xl mb-16">
                <div class="text-xs font-medium tracking-widest uppercase mb-4 text-accent">How It Works</div>
                <h2 class="font-display font-bold leading-tight text-[clamp(1.875rem,4vw,3rem)]">Up and running in a day</h2>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                @foreach ($steps as $index => $step)
                    <div class="relative">
                        @if ($index < count($steps) - 1)
                            <div class="hidden md:block absolute top-6 left-full h-px -translate-y-0.5 z-0 w-[calc(100%-3rem)]"
                                 style="background: linear-gradient(90deg, #1f2d44 0%, transparent 100%);"></div>
                        @endif
                        <div class="relative z-10">
                            <div class="w-12 h-12 rounded-2xl flex items-center justify-center font-display font-bold text-lg mb-6 bg-accent/10 text-accent border border-accent/20">
                                {{ $step['n'] }}
                            </div>
                            <h3 class="font-display font-semibold text-lg mb-3">{{ $step['title'] }}</h3>
                            <p class="text-sm leading-relaxed text-muted">{{ $step['desc'] }}</p>
                        </div>
                    </div>
                @endforeach
            </div>

            {{-- Dashboard preview --}}
            <div class="mt-16 rounded-2xl overflow-hidden border border-border bg-bg">
                <div class="flex items-center gap-2 px-5 py-3 border-b border-border bg-surface">
                    <div class="w-3 h-3 rounded-full bg-red-500"></div>
                    <div class="w-3 h-3 rounded-full bg-amber"></div>
                    <div class="w-3 h-3 rounded-full bg-accent"></div>
                    <span class="text-xs ml-2 text-muted-2">app.pawdesk.ph — Dashboard</span>
                </div>
                <div class="p-6 sm:p-8 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
                    @foreach ($statCards as $card)
                        <div class="rounded-xl p-4 bg-surface border border-border">
                            <div class="text-xs mb-3 text-muted">{{ $card['label'] }}</div>
                            <div class="font-display font-bold text-2xl mb-1">{{ $card['value'] }}</div>
                            <div class="text-xs text-accent">{{ $card['delta'] }}</div>
                        </div>
                    @endforeach
                </div>
                <div class="px-6 sm:px-8 pb-6 sm:pb-8 grid grid-cols-1 lg:grid-cols-3 gap-4">
                    {{-- Calendar block --}}
                    <div class="lg:col-span-2 rounded-xl p-5 bg-surface border border-border">
                        <div class="flex items-center justify-between mb-4">
                            <span class="font-display font-semibold text-sm">Today's Schedule</span>
                            <span class="text-xs text-muted">Sept 12, 2026</span>
                        </div>
                        <div class="flex flex-col gap-2">
                            @foreach ($todaySchedule as $appt)
                                <div class="flex items-center gap-4 py-2.5 px-3 rounded-lg text-sm {{ $appt['status'] === 'active' ? 'bg-accent/[0.08]' : '' }}">
                                    <span class="text-xs w-16 shrink-0 text-muted">{{ $appt['time'] }}</span>
                                    <span class="flex-1 font-medium text-xs">{{ $appt['pet'] }}</span>
                                    <span class="hidden sm:block text-xs text-muted">{{ $appt['service'] }}</span>
                                    @if ($appt['status'] === 'done')
                                        <span class="text-xs px-2 py-0.5 rounded-full bg-muted/[0.15] text-muted">Done</span>
                                    @elseif ($appt['status'] === 'active')
                                        <span class="text-xs px-2 py-0.5 rounded-full bg-accent/[0.15] text-accent">● In progress</span>
                                    @else
                                        <span class="text-xs px-2 py-0.5 rounded-full bg-indigo/[0.15] text-indigo">Upcoming</span>
                                    @endif
                                </div>
                            @endforeach
                        </div>
                    </div>
                    {{-- Reminders --}}
                    <div class="rounded-xl p-5 bg-surface border border-border">
                        <div class="font-display font-semibold text-sm mb-4">Recent Reminders Sent</div>
                        @foreach ($remindersSent as $index => $reminder)
                            <div class="flex items-center justify-between py-2 {{ $index < count($remindersSent) - 1 ? 'border-b border-surface-2' : '' }}">
                                <div>
                                    <div class="text-xs font-medium">{{ $reminder['name'] }}</div>
                                    <div class="text-xs text-muted">{{ $reminder['time'] }}</div>
                                </div>
                                <span class="text-xs px-2 py-0.5 rounded-full bg-accent/10 text-accent">{{ $reminder['method'] }}</span>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ── TESTIMONIALS ── --}}
    <section id="testimonials" class="py-24 px-5 sm:px-8">
        <div class="max-w-7xl mx-auto">
            <div class="max-w-2xl mb-16">
                <div class="text-xs font-medium tracking-widest uppercase mb-4 text-accent">What Businesses Say</div>
                <h2 class="font-display font-bold leading-tight text-[clamp(1.875rem,4vw,3rem)]">Trusted by pet pros across the country</h2>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                @foreach ($testimonials as $t)
                    <div class="p-7 rounded-2xl border border-border bg-surface flex flex-col">
                        <div class="flex gap-1 mb-5">
                            @for ($j = 0; $j < 5; $j++)
                                <svg viewBox="0 0 16 16" fill="#f59e0b" class="w-4 h-4">
                                    <path d="M8 1l1.85 3.75L14 5.5l-3 2.92.7 4.08L8 10.25l-3.7 2.25.7-4.08-3-2.92 4.15-.75L8 1z" />
                                </svg>
                            @endfor
                        </div>
                        <p class="text-sm leading-relaxed flex-1 mb-6 text-[#c8d4ec]">&ldquo;{{ $t['quote'] }}&rdquo;</p>
                        <div class="flex items-center gap-3">
                            <div class="w-9 h-9 rounded-full flex items-center justify-center text-xs font-bold"
                                 style="background: {{ $t['color'] }}22; color: {{ $t['color'] }}; border: 1px solid {{ $t['color'] }}44;">
                                {{ $t['avatar'] }}
                            </div>
                            <div>
                                <div class="text-sm font-medium">{{ $t['name'] }}</div>
                                <div class="text-xs text-muted">{{ $t['role'] }}</div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- ── PRICING ── --}}
    <section id="pricing" class="py-24 px-5 sm:px-8 bg-surface border-t border-b border-border">
        <div class="max-w-7xl mx-auto">
            <div class="max-w-2xl mb-16">
                <div class="text-xs font-medium tracking-widest uppercase mb-4 text-accent">Pricing</div>
                <h2 class="font-display font-bold leading-tight mb-4 text-[clamp(1.875rem,4vw,3rem)]">Simple, honest pricing</h2>
                <p class="text-muted">14-day free trial on all plans. No credit card required to start.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 items-stretch">
                @foreach ($plans as $plan)
                    <div class="relative p-7 rounded-2xl border flex flex-col {{ $plan['highlight'] ? 'bg-[#0b1a14] border-accent/40 shadow-glow-accent-card' : 'bg-bg border-border' }}">
                        @if ($plan['badge'])
                            <div class="absolute -top-3 left-1/2 -translate-x-1/2 text-xs font-medium px-3 py-1 rounded-full bg-accent text-bg">
                                {{ $plan['badge'] }}
                            </div>
                        @endif
                        <div class="mb-6">
                            <div class="font-display font-semibold text-lg mb-1">{{ $plan['name'] }}</div>
                            <div class="flex items-end gap-1 mb-3">
                                <span class="font-display font-bold text-4xl">{{ $plan['price'] }}</span>
                                <span class="text-sm pb-1 text-muted">{{ $plan['period'] }}</span>
                            </div>
                            <p class="text-sm text-muted">{{ $plan['desc'] }}</p>
                        </div>

                        <ul class="flex flex-col gap-3 mb-8 flex-1">
                            @foreach ($plan['features'] as $feat)
                                <li class="flex items-center gap-2.5 text-sm">
                                    <svg viewBox="0 0 16 16" fill="none" stroke="#10b981" stroke-width="2" class="w-4 h-4 shrink-0">
                                        <path d="M3 8l3.5 3.5L13 4" />
                                    </svg>
                                    <span class="text-[#c8d4ec]">{{ $feat }}</span>
                                </li>
                            @endforeach
                        </ul>

                        <a href="#" class="w-full py-3 rounded-xl text-sm font-medium text-center transition-all duration-200
                            {{ $plan['highlight'] ? 'bg-accent text-bg hover:bg-accent-dim' : 'bg-transparent text-text border border-border hover:border-border-hover' }}">
                            {{ $plan['cta'] }}
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- ── FAQ ── --}}
    <section class="py-24 px-5 sm:px-8">
        <div class="max-w-3xl mx-auto">
            <div class="mb-16 text-center">
                <div class="text-xs font-medium tracking-widest uppercase mb-4 text-accent">FAQ</div>
                <h2 class="font-display font-bold leading-tight text-[clamp(1.875rem,4vw,3rem)]">Common questions</h2>
            </div>
            <div class="flex flex-col gap-2" x-data="{ activeFaq: null }">
                @foreach ($faqs as $index => $faq)
                    <div class="rounded-xl border border-border overflow-hidden bg-surface">
                        <button
                            class="w-full flex items-center justify-between text-left px-6 py-4 gap-4"
                            x-on:click="activeFaq = activeFaq === {{ $index }} ? null : {{ $index }}"
                        >
                            <span class="text-sm font-medium">{{ $faq['q'] }}</span>
                            <svg viewBox="0 0 16 16" fill="none" stroke="currentColor" stroke-width="1.5"
                                 class="w-4 h-4 shrink-0 text-muted transition-transform duration-200"
                                 :class="activeFaq === {{ $index }} ? 'rotate-180' : 'rotate-0'">
                                <path d="M3 6l5 4 5-4" />
                            </svg>
                        </button>
                        <div x-show="activeFaq === {{ $index }}" x-transition class="px-6 pb-5 text-sm leading-relaxed text-muted" style="display: none;">
                            {{ $faq['a'] }}
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- ── CTA ── --}}
    <section class="py-28 px-5 sm:px-8 relative overflow-hidden bg-[#0b1a14] border-t border-accent/[0.15]">
        <div class="absolute inset-0 pointer-events-none"
             style="background: radial-gradient(ellipse 80% 60% at 50% 100%, rgba(16,185,129,0.1) 0%, transparent 70%);"></div>
        <div class="relative max-w-3xl mx-auto text-center">
            <h2 class="font-display font-bold leading-tight mb-5 text-[clamp(2rem,5vw,3.5rem)]">
                Ready to take control of your pet business?
            </h2>
            <p class="text-lg mb-10 text-muted">
                Join 2,400+ pet businesses already running smoother with PawDesk. Start your free trial today — no credit card, no contracts.
            </p>
            <div class="flex flex-col sm:flex-row items-center justify-center gap-3">
                <a href="#" class="w-full sm:w-auto px-8 py-4 rounded-xl font-medium text-sm bg-accent text-bg hover:bg-accent-dim transition-all duration-200"
                   style="box-shadow: 0 0 40px rgba(16,185,129,0.35);">
                    Create your free account
                </a>
                <a href="mailto:hello@pawdesk.ph" class="w-full sm:w-auto px-8 py-4 rounded-xl font-medium text-sm border border-accent/30 text-accent hover:border-accent/60 transition-all duration-200">
                    Talk to sales
                </a>
            </div>
        </div>
    </section>

    {{-- ── FOOTER ── --}}
    <footer class="py-16 px-5 sm:px-8 border-t border-border bg-bg">
        <div class="max-w-7xl mx-auto">
            <div class="grid grid-cols-2 md:grid-cols-5 gap-10 mb-14">
                <div class="col-span-2">
                    <a href="#" class="flex items-center gap-2.5 font-display font-bold text-xl tracking-tight mb-4">
                        <span class="w-8 h-8 rounded-lg flex items-center justify-center text-sm font-bold bg-accent text-bg">P</span>
                        PawDesk
                    </a>
                    <p class="text-sm leading-relaxed mb-5 text-muted max-w-[260px]">
                        The all-in-one platform built for pet service businesses. Book, manage, and grow — all in one place.
                    </p>
                    <div class="flex gap-3">
                        @foreach (['Facebook', 'Instagram', 'Twitter'] as $s)
                            <a href="#" class="w-8 h-8 rounded-lg border border-border flex items-center justify-center text-xs text-muted hover:border-border-hover hover:text-text transition-colors duration-150">
                                {{ $s[0] }}
                            </a>
                        @endforeach
                    </div>
                </div>
                @foreach ([
                    ['title' => 'Product', 'links' => ['Features', 'Pricing', 'Integrations', 'Changelog', 'Status']],
                    ['title' => 'Business Types', 'links' => ['Grooming', 'Veterinary', 'Training', 'Boarding', 'Daycare']],
                    ['title' => 'Company', 'links' => ['About', 'Blog', 'Careers', 'Press', 'Contact']],
                ] as $col)
                    <div>
                        <div class="text-xs font-semibold tracking-widest uppercase mb-4 text-muted-2">{{ $col['title'] }}</div>
                        <ul class="flex flex-col gap-2.5">
                            @foreach ($col['links'] as $l)
                                <li>
                                    <a href="#" class="text-sm text-muted hover:text-text transition-colors duration-150">{{ $l }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                @endforeach
            </div>

            <div class="flex flex-col sm:flex-row items-center justify-between gap-4 pt-8 border-t border-border text-xs text-muted-2">
                <span>© {{ date('Y') }} PawDesk. All rights reserved.</span>
                <div class="flex gap-6">
                    <a href="#" class="hover:text-muted transition-colors">Privacy</a>
                    <a href="#" class="hover:text-muted transition-colors">Terms</a>
                    <a href="#" class="hover:text-muted transition-colors">Cookies</a>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>