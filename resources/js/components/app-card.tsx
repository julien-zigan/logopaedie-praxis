import { Link } from '@inertiajs/react';
import { ReactNode } from 'react';

const themes = {
    green: {
        hex: '#10b981',
        borderHover: 'hover:border-green-400 dark:hover:border-green-500',
        iconBg: 'bg-green-100/90 dark:bg-green-900/60 text-green-700 dark:text-green-300 group-hover:bg-green-600',
        textAccent: 'text-green-700 dark:text-green-400',
        playBg: 'bg-green-200/80 dark:bg-green-800/80 text-green-700 group-hover:bg-green-600',
    },
    blue: {
        hex: '#3b82f6',
        borderHover: 'hover:border-blue-400 dark:hover:border-blue-500',
        iconBg: 'bg-blue-100/90 dark:bg-blue-900/60 text-blue-700 dark:text-blue-300 group-hover:bg-blue-500',
        textAccent: 'text-blue-700 dark:text-blue-400',
        playBg: 'bg-blue-200/80 dark:bg-blue-800/80 text-blue-700 group-hover:bg-blue-600',
    },
    purple: {
        hex: '#8b5cf6',
        borderHover: 'hover:border-purple-400 dark:hover:border-purple-500',
        iconBg: 'bg-purple-100/90 dark:bg-purple-900/60 text-purple-700 dark:text-purple-300 group-hover:bg-purple-500',
        textAccent: 'text-purple-700 dark:text-purple-400',
        playBg: 'bg-purple-200/80 dark:bg-purple-800/80 text-purple-700 group-hover:bg-purple-600',
    },
};

interface AppCardProps {
    href: string;
    title: string;
    description: string;
    icon: ReactNode;
    color?: 'green' | 'blue' | 'purple';
}

export function AppCard({
    href,
    title,
    description,
    icon,
    color = 'green',
}: AppCardProps) {
    const theme = themes[color];

    return (
        <Link
            href={href}
            style={{
                // "33" is roughly 20% opacity. If you want even stronger, try "44" (26%)
                backgroundColor: `${theme.hex}33`,
                boxShadow: `inset 0 0 20px ${theme.hex}15`, // Adds a subtle inner color glow
            }}
            className={`group relative flex aspect-video items-center justify-center overflow-hidden rounded-2xl border border-gray-200 p-6 shadow-sm transition-all duration-300 hover:shadow-md dark:border-gray-700 ${theme.borderHover} backdrop-blur-[2px]`}
        >
            <div className="flex flex-col items-center text-center">
                {/* Darker icon backgrounds for better contrast against the stronger card color */}
                <div
                    className={`mb-3 rounded-full p-3 transition-colors duration-300 group-hover:text-white ${theme.iconBg}`}
                >
                    {icon}
                </div>

                <h2 className="mb-1 text-base font-bold text-gray-900 lg:text-lg dark:text-gray-50">
                    {title}
                </h2>

                <p className="hidden px-4 text-xs font-medium text-gray-600 lg:block dark:text-gray-300">
                    {description}
                </p>

                <div className="mt-3 flex flex-col items-center gap-2">
                    <span
                        className={`text-xs font-bold tracking-wider uppercase ${theme.textAccent}`}
                    >
                        Übungen starten
                    </span>
                    <div
                        className={`flex h-9 w-9 items-center justify-center rounded-full shadow-sm transition-all group-hover:scale-110 group-hover:text-white ${theme.playBg}`}
                    >
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 24 24"
                            fill="currentColor"
                            className="ml-0.5 h-4 w-4"
                        >
                            <path
                                fillRule="evenodd"
                                d="M4.5 5.653c0-1.426 1.529-2.33 2.779-1.643l11.54 6.348c1.295.712 1.295 2.573 0 3.285L7.28 19.991c-1.25.687-2.779-.217-2.779-1.643V5.653z"
                                clipRule="evenodd"
                            />
                        </svg>
                    </div>
                </div>
            </div>
        </Link>
    );
}
