import Footer from '@/components/footer';
import Header from '@/components/header';
import { type SharedData } from '@/types';
import { Head, usePage } from '@inertiajs/react';

export default function About() {
    const { auth } = usePage<SharedData>().props;

    return (
        <>
            <Head title="Über mich & das Projekt">
                <link rel="preconnect" href="https://fonts.bunny.net" />
                <link
                    href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600"
                    rel="stylesheet"
                />
            </Head>

            {/* REMOVED: lg:max-h-screen and lg:overflow-hidden to allow scrolling */}
            <div className="flex min-h-screen flex-col items-center bg-[#FDFDFC] p-6 text-[#1b1b18] lg:p-8 dark:bg-[#0a0a0a]">
                <Header auth={auth} />

                {/* REMOVED: justify-center from main to allow content to start from the top naturally */}
                <main className="flex w-full flex-1 flex-col items-center gap-8 py-12 lg:py-20">
                    <div className="w-full max-w-[335px] space-y-12 lg:max-w-3xl">
                        {/* Section 1: Profil & Motivation */}
                        <section className="space-y-6">
                            <h2 className="text-xs font-bold tracking-widest text-green-600 uppercase dark:text-green-400">
                                Motivierter Anwendungsentwickler auf dem Weg zum PHP-Webentwickler
                            </h2>
                            <h1 className="text-4xl font-extrabold tracking-tight sm:text-5xl dark:text-gray-100">
                                Fokus auf moderne Web-Architekturen.
                            </h1>
                            <p className="text-lg leading-relaxed text-gray-600 dark:text-gray-400">
                                Ich bin ein engagierter Anwendungsentwickler in
                                einer Umschulung zum Fachinformatiker. Mein
                                technischer Schwerpunkt liegt in der
                                Webentwicklung mit Fokus auf das{' '}
                                <strong>Backend</strong>. Dieses Projekt dient
                                mir als praktisches Lernfeld, um tiefer in die
                                Architektur von komplexen Web-Anwendungen
                                einzutauchen und die Best Practices moderner
                                Frameworks umzusetzen.
                            </p>
                        </section>

                        {/* Section 2: Technical Background & Shift */}
                        <section className="grid grid-cols-1 gap-12 border-t border-gray-100 pt-12 sm:grid-cols-2 dark:border-gray-800">
                            <div className="space-y-4">
                                <h3 className="flex items-center gap-2 text-xl font-bold text-gray-900 dark:text-gray-100">
                                    <span className="h-2 w-2 rounded-full bg-green-500"></span>
                                    Java zu PHP/Laravel
                                </h3>
                                <p className="text-base leading-relaxed text-gray-600 dark:text-gray-400">
                                    Bisher habe ich hauptsächlich im{' '}
                                    <strong>
                                        Java-Ökosystem mit Spring Boot
                                    </strong>{' '}
                                    gearbeitet. Vor kurzem habe ich meine Reise
                                    mit PHP begonnen. Obwohl ich noch am Anfang
                                    meiner PHP-Laufbahn stehe, habe ich das
                                    klare Ziel, meine Kenntnisse in{' '}
                                    <strong>Laravel</strong> (aktuell Version
                                    12) zu perfektionieren und ein
                                    tiefgreifendes Verständnis für das Framework
                                    zu entwickeln.
                                </p>
                            </div>
                            <div className="space-y-4">
                                <h3 className="flex items-center gap-2 text-xl font-bold text-gray-900 dark:text-gray-100">
                                    <span className="h-2 w-2 rounded-full bg-green-500"></span>
                                    Engineering-Ansatz
                                </h3>
                                <p className="text-base leading-relaxed text-gray-600 dark:text-gray-400">
                                    Durch meine Vorerfahrung mit stark
                                    typisierten Sprachen bringe ich ein
                                    ausgeprägtes Verständnis für
                                    Software-Design-Patterns und
                                    Architekturkonzepte mit. Mein Ziel ist es,
                                    dieses Wissen auf PHP zu übertragen, um
                                    robuste und skalierbare Backend-Systeme zu
                                    bauen.
                                </p>
                            </div>
                        </section>

                        {/* Professional Closing */}
                        <div className="rounded-2xl bg-gray-50 p-8 dark:bg-white/5">
                            <p className="text-sm text-gray-500 italic dark:text-gray-400">
                                Dieses Projekt befindet sich im stetigen Wandel
                                – ein Spiegelbild meiner eigenen technischen
                                Weiterentwicklung.
                                <span className="mt-2 block font-semibold text-green-600 not-italic dark:text-green-400">
                                    Bereit für neue Herausforderungen in der
                                    Web-Entwicklung mit PHP.
                                </span>
                            </p>
                        </div>
                    </div>
                </main>

                <Footer />
            </div>
        </>
    );
}
