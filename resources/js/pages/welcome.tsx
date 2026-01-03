import { type SharedData } from '@/types';
import { Head, usePage } from '@inertiajs/react';
import { NavigationCard } from '@/components/navigation-card';
import Footer from '@/components/footer';
import Header from '@/components/header';
import Hero from '@/components/hero';

export default function Welcome({
    canRegister = true,
}: {
    canRegister?: boolean;
}) {
    const { auth } = usePage<SharedData>().props;

    return (
        <>
            <Head title="Wilkommen">
                <link rel="preconnect" href="https://fonts.bunny.net" />
                <link
                    href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600"
                    rel="stylesheet"
                />
            </Head>
            <div className="flex min-h-screen flex-col items-center bg-[#FDFDFC] p-6 text-[#1b1b18] lg:justify-center lg:p-8 dark:bg-[#0a0a0a]">
                <Header auth={auth} canRegister={canRegister} />
                <Hero />
                <div className="flex w-full items-center justify-center opacity-100 transition-opacity duration-750 lg:grow starting:opacity-0">
                    <main className="flex w-full max-w-[335px] flex-col-reverse gap-5 lg:max-w-4xl lg:flex-row">
                        <NavigationCard
                            href="/dashboard"
                            title="Zu den Web-Apps"
                            description="Hier gelangen Sie zum Dashboard für Ihre Apps und Ihre Profilverwaltung."
                            actionText="Zum Dashboard wechseln"
                            icon={
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    className="h-8 w-8"
                                    fill="none"
                                    viewBox="0 0 24 24"
                                    stroke="currentColor"
                                    strokeWidth="2"
                                >
                                    <path
                                        strokeLinecap="round"
                                        strokeLinejoin="round"
                                        d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"
                                    />
                                </svg>
                            }
                        />

                        <NavigationCard
                            href="/docs" // Update to your actual documentation route
                            color="blue"
                            title="REST-API Dokumentation"
                            description="Entdecken Sie unsere Entwickler-Schnittstellen zur Integration Ihrer eigenen Anwendungen und Workflows."
                            actionText="Dokumentation öffnen"
                            icon={
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    className="h-8 w-8"
                                    fill="none"
                                    viewBox="0 0 24 24"
                                    stroke="currentColor"
                                    strokeWidth="2"
                                >
                                    <path
                                        strokeLinecap="round"
                                        strokeLinejoin="round"
                                        d="M17.25 6.75L22.5 12l-5.25 5.25m-10.5 0L1.5 12l5.25-5.25m7.5-3l-4.5 16.5"
                                    />
                                </svg>
                            }
                        />
                    </main>
                </div>
                <Footer />

                <div className="hidden h-14.5 lg:block"></div>
            </div>
        </>
    );
}
