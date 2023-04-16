import Head from "next/head";
import Image from "next/image";
import styles from "@/styles/Home.module.css";

export default function Home() {
    return (
        <>
            <Head>
                <title>chezzzer</title>
                <meta name="description" content="Chezzer's homepage" />
                <meta
                    name="viewport"
                    content="width=device-width, initial-scale=1"
                />
                <link rel="icon" href="/favicon.ico" />
            </Head>
            <main className={styles.main}>
                <div className={styles.container}>
                    <div>
                        <h1 className={styles.name}>chezzer</h1>
                        <h1 className={styles.job}>WEB DEVELOPER</h1>
                    </div>
                </div>
                <div className={styles.work}>
                    <h1>What I&apos;m Known For</h1>
                    <div className={styles.item}>
                        <h2>Bundle Group</h2>
                        <div>
                            <a href="https://bundlegroup.gg" target="_blank">
                                bundlegroup.gg
                            </a>
                        </div>
                        <div>
                            <a
                                href="https://expeditionisles.net"
                                target="_blank"
                            >
                                expeditionisles.net
                            </a>
                        </div>
                    </div>
                    <div className={styles.item}>
                        <h2>EVNT</h2>
                        <div>
                            <a href="https://fn.games" target="_blank">
                                fn.games
                            </a>
                        </div>
                    </div>
                    <div className={styles.item}>
                        <h2>Rocketspark</h2>
                        <a href="https://rocketspark.co.nz" target="_blank">
                            Link
                        </a>
                    </div>
                    <div className={styles.item}>
                        <h2>Coasters & Crafters</h2>
                        <div>
                            <a
                                href="https://coastersandcrafters.com"
                                target="_blank"
                            >
                                coastersandcrafters.com
                            </a>
                        </div>
                        <div>
                            <a href="https://coastercon.net" target="_blank">
                                coastercon.net
                            </a>
                        </div>
                    </div>
                </div>
                <div className={styles.contact}>
                    <h1>Get in touch</h1>
                    <div>
                        <a href="mailto:hello@chezzer.dev">hello@chezzer.dev</a>
                    </div>
                    <div>
                        <a href="https://dsc.bio/chezzer" target="_blank">
                            Chezzer#6969
                        </a>
                    </div>
                </div>
            </main>
        </>
    );
}
