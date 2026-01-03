interface AppLogoProps {
    className?: string;
    showTitle?: boolean;
}

export default function AppLogo({
    className,
    showTitle = false,
}: AppLogoProps) {
    // The SVG Icon logic
    const Icon = (
        <svg
            viewBox="0 0 40 42"
            fill="currentColor"
            xmlns="http://www.w3.org/2000/svg"
            className={className || 'h-6 w-auto'}
        >
            <path
                fillRule="evenodd"
                clipRule="evenodd"
                d="M20 6C10.0589 6 2 13.1634 2 22C2 25.1303 3.01254 28.0461 4.75544 30.4688L3 37L10.3708 34.321C13.2033 36.6373 16.4719 38 20 38C29.9411 38 38 30.8366 38 22C38 13.1634 29.9411 6 20 6Z"
            />
        </svg>
    );

    // If we just want the icon (used for Header or specific logo placement)
    if (!showTitle) {
        return Icon;
    }

    // Full Sidebar version (Icon box + Branded Text)
    return (
        <div className="flex items-center gap-2">
            {/* Box changed to your brand green with a subtle gradient */}
            <div className="flex aspect-square size-8 items-center justify-center rounded-md bg-gradient-to-br from-green-500 to-emerald-600 text-white shadow-sm">
                <div className="size-5">{Icon}</div>
            </div>

            <div className="grid flex-1 text-left text-sm leading-tight">
                <span className="truncate font-semibold text-gray-900 dark:text-gray-100">
                    Logopädie{' '}
                    <span className="text-green-600 dark:text-green-400">
                        Plus
                    </span>
                </span>
                {/* Optional: Add your subtitle or role here if needed */}
                <span className="truncate text-xs font-medium text-gray-500 dark:text-gray-400">
                    Laravel-Kentniss-Demo
                </span>
            </div>
        </div>
    );
}
