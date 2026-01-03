import { Link } from '@inertiajs/react';
import { register } from '@/routes';

export default function Hero() {
    return (
        <section className="mx-auto flex max-w-[335px] flex-col items-center py-16 text-center lg:max-w-4xl lg:py-24">
            {/* Skill Disclaimer Badge */}
            <div className="mb-6 inline-flex items-center rounded-full border border-green-200 bg-green-50 px-3 py-1 text-xs font-semibold text-green-700 dark:border-green-900/30 dark:bg-green-500/10 dark:text-green-400">
                <span className="mr-2 flex h-2 w-2 animate-pulse rounded-full bg-green-500"></span>
                Laravel Skill-Demo
            </div>

            {/* Main Heading */}
            <h1 className="mb-6 text-2xl font-extrabold tracking-tight text-gray-900 sm:text-5xl lg:text-6xl dark:text-gray-100">
                Digitale Lösungen für die <br />
                <span className="bg-gradient-to-r from-green-600 to-emerald-500 bg-clip-text text-transparent">
                    moderne Logopädie
                </span>
            </h1>

            {/* Description Text */}
            <p className="mb-10 max-w-2xl leading-relaxed text-gray-600 dark:text-gray-400">
                Diese Plattform dient als Demonstration meiner Kenntnisse in der
                Webentwicklung. Erstellt mit{' '}
                <strong>Laravel, React und Tailwind CSS</strong>, vereint dieses
                Projekt moderne Architektur mit einer intuitiven
                Benutzererfahrung für therapeutische Anwendungen.
            </p>

            {/* Primary Action */}
            <div className="flex flex-col gap-4 sm:flex-row">
                <Link
                    href={register()}
                    className="inline-block rounded-xl bg-green-600 px-8 py-3 text-sm font-bold tracking-wider text-white uppercase transition-all hover:bg-green-700 hover:shadow-lg hover:shadow-green-500/20 active:scale-95"
                >
                    Demo starten
                </Link>
                <a
                    href="https://github.com/julien-zigan/logopaedie-praxis"
                    className="inline-flex items-center rounded-xl border border-gray-200 bg-green-500/10 px-5 py-1.5 text-sm font-bold tracking-wider text-green-700 uppercase backdrop-blur-sm transition-all hover:border-green-400 hover:bg-green-500/20 dark:border-gray-700 dark:bg-green-500/10 dark:text-green-400 dark:hover:border-green-500 dark:hover:bg-green-500/20"
                >
                    Quellcode auf GitHub ansehen
                </a>
                <Link
                    href="/about"
                    className="inline-block rounded-xl border border-gray-200 bg-white px-8 py-3 text-sm font-bold tracking-wider text-gray-700 uppercase transition-all hover:bg-gray-50 dark:border-gray-800 dark:bg-gray-900 dark:text-gray-300 dark:hover:bg-gray-800"
                >
                    Mehr erfahren
                </Link>
            </div>
        </section>
    );
}
