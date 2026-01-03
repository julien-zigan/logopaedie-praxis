import { Link } from '@inertiajs/react';
import { ReactNode } from 'react';

const themes = {
    green: {
        hex: '#10b981',
        borderHover: 'hover:border-green-400 dark:hover:border-green-500',
        iconBg: 'bg-green-100/90 dark:bg-green-900/60 text-green-700 dark:text-green-300 group-hover:bg-green-600',
        textAccent: 'text-green-700 dark:text-green-400',
    },
    blue: {
        hex: '#3b82f6',
        borderHover: 'hover:border-blue-400 dark:hover:border-blue-500',
        iconBg: 'bg-blue-100/90 dark:bg-blue-900/60 text-blue-700 dark:text-blue-300 group-hover:bg-blue-600',
        textAccent: 'text-blue-700 dark:text-blue-400',
    },
};

interface NavigationCardProps {
    href: string;
    title: string;
    description: string;
    actionText: string;
    icon: ReactNode;
    color?: keyof typeof themes;
}

export function NavigationCard({
    href,
    title,
    description,
    actionText,
    icon,
    color = 'green',
}: NavigationCardProps) {
    const theme = themes[color];

    return (
        /* Removed mx-auto and p-6 from the component itself to let the parent grid handle spacing */
        <Link
            href={href}
            style={{
                backgroundColor: `${theme.hex}33`,
                boxShadow: `inset 0 0 20px ${theme.hex}15`,
            }}
            /* Added h-full to ensure it fills the grid cell height */
            className={`group relative flex h-full flex-col items-center justify-center overflow-hidden rounded-2xl border border-gray-200 p-8 text-center shadow-sm transition-all duration-300 hover:shadow-md dark:border-gray-700 ${theme.borderHover} backdrop-blur-[2px]`}
        >
            <div className="flex flex-col items-center">
                <div
                    className={`mb-4 rounded-full p-3 transition-colors duration-300 group-hover:text-white ${theme.iconBg}`}
                >
                    {icon}
                </div>

                <h2 className="mb-2 text-xl font-bold text-gray-900 dark:text-gray-50">
                    {title}
                </h2>
                <p className="max-w-md text-sm font-medium text-gray-600 dark:text-gray-300">
                    {description}
                </p>

                {/* mt-auto ensures the action text stays at the bottom if the card grows */}
                <div
                    className={`mt-auto flex items-center pt-6 text-sm font-bold tracking-wider uppercase ${theme.textAccent}`}
                >
                    {actionText}
                    <svg
                        className="ml-2 h-4 w-4 transition-transform group-hover:translate-x-1"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                        strokeWidth="2.5"
                    >
                        <path
                            strokeLinecap="round"
                            strokeLinejoin="round"
                            d="M9 5l7 7-7 7"
                        />
                    </svg>
                </div>
            </div>
        </Link>
    );
}
