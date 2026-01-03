import { Link } from '@inertiajs/react';
import AppLogo from './app-logo';

export default function Footer() {
    return (
        <>
            <footer className="mt-20 border-t border-gray-200 bg-white/50 py-12 backdrop-blur-sm dark:border-gray-800 dark:bg-gray-900/50">
                <div className="mx-auto max-w-[335px] lg:max-w-4xl">
                    <div className="grid grid-cols-1 gap-8 md:grid-cols-3">
                        {/* Column 1: Brand */}
                        <div className="flex flex-col gap-4">
                            <div className="flex items-center gap-2">
                                <AppLogo className="h-8 w-auto text-green-600 dark:text-green-400" />
                                <span className="text-base font-bold tracking-tight text-gray-900 dark:text-gray-100">
                                    Logopädie{' '}
                                    <span className="text-green-600 dark:text-green-400">
                                        Plus
                                    </span>
                                </span>
                            </div>
                            <p className="text-sm leading-relaxed text-gray-500 dark:text-gray-400">
                                Moderne digitale Unterstützung für die Sprach-
                                und Sprechtherapie.
                            </p>
                        </div>

                        {/* Column 2: Quick Links */}
                        <div>
                            <h3 className="mb-4 text-xs font-bold tracking-widest text-gray-900 uppercase dark:text-gray-100">
                                Navigation
                            </h3>
                            <ul className="space-y-2 text-sm text-gray-600 dark:text-gray-400">
                                <li>
                                    <Link
                                        href="/"
                                        className="transition-colors hover:text-green-600 dark:hover:text-green-400"
                                    >
                                        Startseite
                                    </Link>
                                </li>
                                <li>
                                    <Link
                                        href="/about"
                                        className="transition-colors hover:text-green-600 dark:hover:text-green-400"
                                    >
                                        Über dieses Projekt
                                    </Link>
                                </li>
                                <li>
                                    <Link
                                        href="/dashboard"
                                        className="transition-colors hover:text-green-600 dark:hover:text-green-400"
                                    >
                                        Zu den Web-Apps
                                    </Link>
                                </li>
                                <li>
                                    <Link
                                        href="/docs"
                                        className="transition-colors hover:text-green-600 dark:hover:text-green-400"
                                    >
                                        API Docs
                                    </Link>
                                </li>
                            </ul>
                        </div>

                        {/* Column 3: Legal */}
                        <div>
                            <h3 className="mb-4 text-xs font-bold tracking-widest text-gray-900 uppercase dark:text-gray-100">
                                Rechtliches
                            </h3>
                            <ul className="space-y-2 text-sm text-gray-600 dark:text-gray-400">
                                <li>
                                    <Link
                                        href="/impressum"
                                        className="transition-colors hover:text-green-600 dark:hover:text-green-400"
                                    >
                                        Impressum
                                    </Link>
                                </li>
                                <li>
                                    <Link
                                        href="/datenschutz"
                                        className="transition-colors hover:text-green-600 dark:hover:text-green-400"
                                    >
                                        Datenschutz
                                    </Link>
                                </li>
                            </ul>
                        </div>
                    </div>

                    {/* Bottom Bar */}
                    <div className="mt-12 border-t border-gray-100 pt-8 dark:border-gray-800">
                        <p className="text-center text-xs font-medium text-gray-500 dark:text-gray-500">
                            &copy; {new Date().getFullYear()} Logopädie Plus.
                            Alle Rechte vorbehalten.
                        </p>
                    </div>
                </div>
            </footer>

            {/* Desktop Spacer for fixed elements */}
            <div className="hidden h-14.5 lg:block"></div>
        </>
    );
}
