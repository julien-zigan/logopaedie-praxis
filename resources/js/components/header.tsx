import { dashboard, login, register } from '@/routes';
import { Link } from '@inertiajs/react';
import AppLogo from '@/components/app-logo';

interface HeaderProps {
    auth: {
        user: any;
    };
    canRegister?: boolean;
}

export default function Header({ auth, canRegister }: HeaderProps) {
    return (
        <header className="mx-auto flex w-full max-w-[335px] items-center justify-between text-sm lg:max-w-4xl">
            {/* Left Side: Logo and Title */}
            <Link href="/" className="flex items-center gap-3 transition-opacity hover:opacity-90">
                <AppLogo className="h-9 w-auto text-green-600 dark:text-green-400" />
                <span className="text-lg font-bold tracking-tight text-gray-900 dark:text-gray-100">
                    Logopädie <span className="text-green-600 dark:text-green-400">Plus</span>
                </span>
            </Link>

            {/* Right Side: Navigation */}
            <nav className="flex items-center gap-2 sm:gap-4">
                <Link
                    href="/about"
                    className="hidden px-2 py-1.5 text-sm font-bold uppercase tracking-wider text-gray-600 transition-all hover:text-green-600 sm:inline-block dark:text-gray-400 dark:hover:text-green-400"
                >
                    Über dieses Projekt
                </Link>

                {auth.user ? (
                    <Link
                        href={dashboard()}
                        className="inline-block rounded-xl border border-gray-200 bg-green-500/10 px-5 py-1.5 text-sm font-bold uppercase tracking-wider text-green-700 backdrop-blur-sm transition-all hover:border-green-400 hover:bg-green-500/20 dark:border-gray-700 dark:bg-green-500/10 dark:text-green-400 dark:hover:border-green-500 dark:hover:bg-green-500/20"
                    >
                        Dashboard
                    </Link>
                ) : (
                    <>
                        {canRegister && (
                            <Link
                                href={register()}
                                className="hidden rounded-xl border border-transparent px-5 py-1.5 text-sm font-bold uppercase tracking-wider text-gray-600 transition-all hover:text-green-600 sm:inline-block dark:text-gray-400 dark:hover:text-green-400"
                            >
                                Konto erstellen
                            </Link>
                        )}
                        <Link
                            href={login()}
                            className="inline-block rounded-xl border border-gray-200 bg-green-500/10 px-5 py-1.5 text-sm font-bold uppercase tracking-wider text-green-700 backdrop-blur-sm transition-all hover:border-green-400 hover:bg-green-500/20 dark:border-gray-700 dark:bg-green-500/10 dark:text-green-400 dark:hover:border-green-500 dark:hover:bg-green-500/20"
                        >
                            Anmelden
                        </Link>
                    </>
                )}
            </nav>
        </header>
    );
}
