import { PlaceholderPattern } from '@/components/ui/placeholder-pattern';
import AppLayout from '@/layouts/app-layout';
import { dashboard } from '@/routes';
import { type BreadcrumbItem } from '@/types';
import { Head } from '@inertiajs/react';
import { AppCard } from '@/components/app-card';

const breadcrumbs: BreadcrumbItem[] = [
    {
        title: 'Dashboard',
        href: dashboard().url,
    },
];

export default function Dashboard() {
    return (
        <AppLayout breadcrumbs={breadcrumbs}>
            <Head title="Meine Apps" />
            <div className="flex h-full flex-1 flex-col gap-4 p-4">
                <div className="grid gap-4 md:grid-cols-3">
                    {/* Top Row - Item 1 (Your App Card) */}

                    <AppCard
                        href="/app/speech"
                        color="green"
                        title="Sprach- und Sprechtherapie"
                        description="Interaktive Sprach- und Sprechübungen"
                        icon={
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                className="h-6 w-6 lg:h-8 lg:w-8"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke="currentColor"
                                strokeWidth="2"
                            >
                                <path
                                    strokeLinecap="round"
                                    strokeLinejoin="round"
                                    d="M8 10h.01M12 10h.01M16 10h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"
                                />
                            </svg>
                        }
                    />

                    {/* Top Row - Item 2 */}
                    <AppCard
                        href="/app/voice"
                        color="blue"
                        title="Stimme und Gesang"
                        description="Therapeutisches Stimmtraining und Gesangsübungen"
                        icon={
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                className="h-6 w-6 lg:h-8 lg:w-8"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke="currentColor"
                                strokeWidth="2"
                            >
                                <path
                                    strokeLinecap="round"
                                    strokeLinejoin="round"
                                    d="M9 19V6l12-3v13M9 19c0 1.105-1.343 2-3 2s-3-.895-3-2 1.343-2 3-2 3 .895 3 2zm12-3c0 1.105-1.343 2-3 2s-3-.895-3-2 1.343-2 3-2 3 .895 3 2zM9 10l12-3"
                                />
                            </svg>
                        }
                    />

                    {/* Top Row - Item 3 */}
                    <AppCard
                        href="/app/literacy"
                        color="purple"
                        title="Lesen und Rechtschreibung"
                        description="Gezieltes Training zur Verbesserung der Lese- und Schreibkompetenz"
                        icon={
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                className="h-6 w-6 lg:h-8 lg:w-8"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke="currentColor"
                                strokeWidth="2"
                            >
                                <path
                                    strokeLinecap="round"
                                    strokeLinejoin="round"
                                    d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"
                                />
                            </svg>
                        }
                    />
                </div>

                {/* Large Bottom Content Area */}
                <div className="relative min-h-[500px] flex-1 overflow-hidden rounded-2xl border border-gray-200 bg-white transition-all duration-300 dark:border-gray-700 dark:bg-gray-800">
                    <PlaceholderPattern className="absolute inset-0 size-full stroke-green-600/5 dark:stroke-green-400/5" />
                </div>
            </div>
        </AppLayout>
    );
}
