import Footer from '@/components/footer';
import Header from '@/components/header';
import { type SharedData } from '@/types';
import { Head, usePage, Link } from '@inertiajs/react';
import { Hammer } from 'lucide-react'; // Or use your own SVG logic

export default function ComingSoon({ title = "In Arbeit" }: { title?: string }) {
    const { auth } = usePage<SharedData>().props;

    return (
        <>
            <Head title={title}>
                <link rel="preconnect" href="https://fonts.bunny.net" />
                <link
                    href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600"
                    rel="stylesheet"
                />
            </Head>

            <div className="flex min-h-screen flex-col items-center bg-[#FDFDFC] p-6 text-[#1b1b18] lg:max-h-screen lg:overflow-hidden lg:p-8 dark:bg-[#0a0a0a]">
                <Header auth={auth} />

                <main className="mt-12 flex w-full flex-1 flex-col items-center justify-center text-center">
                    <div className="mt-12 flex h-20 w-20 items-center justify-center rounded-full bg-green-500/10 mb-8 dark:bg-green-500/20">
                        <Hammer className="h-10 w-10 text-green-600 dark:text-green-400" />
                    </div>

                    <h2 className="text-xs font-bold uppercase tracking-widest text-green-600 mb-4 dark:text-green-400">
                        Demnächst verfügbar
                    </h2>

                    <h1 className="text-3xl font-extrabold tracking-tight sm:text-4xl dark:text-gray-100 mb-6">
                        Dieses Feature wird gerade <br />
                        <span className="bg-gradient-to-r from-green-600 to-emerald-500 bg-clip-text text-transparent">
                            implementiert.
                        </span>
                    </h1>

                    <p className="max-w-md text-gray-600 dark:text-gray-400 mb-10 leading-relaxed">
                        Ich arbeite aktuell an der Backend-Logik für diesen Bereich.
                        Schauen Sie bald wieder vorbei, um die Fortschritte meiner
                        Laravel-Reise zu sehen.
                    </p>

                    <Link
                        href="/"
                        className="inline-block rounded-xl border border-gray-200 bg-white px-8 py-3 text-sm font-bold uppercase tracking-wider text-gray-700 transition-all hover:bg-gray-50 dark:border-gray-800 dark:bg-gray-900 dark:text-gray-300 dark:hover:bg-gray-800"
                    >
                        Zurück zur Startseite
                    </Link>
                </main>

                <Footer />
                <div className="hidden h-14.5 lg:block"></div>
            </div>
        </>
    );
}
