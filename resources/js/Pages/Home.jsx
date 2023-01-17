import { usePage } from "@inertiajs/inertia-react";
import React from "react";
import "../../css/style.css"
import Layout from "./Main/Layout.jsx";

const Home = () => {
    const {user} = usePage().props.auth;
    console.log("user", user);

    return(
        <div>
            <Layout>
                <center>
                    <b>
                        <br/>
                        SELAMAT DATANG USER DENGAN AKSES MASUK {" "}{ user?.kode_admin ?? user?.nis ?? user?.nip }
                    </b>
                </center>
            </Layout>
        </div>
    );
};

export default Home;