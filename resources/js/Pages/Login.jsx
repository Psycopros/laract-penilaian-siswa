import { Inertia } from "@inertiajs/inertia";
import { Head } from "@inertiajs/inertia-react";
import React, { useState } from "react";
import { usePage } from "@inertiajs/inertia-react";
import "../../css/style.css"

export default function login(){
    const {error} = usePage().props.errors;
    const [idAdmin, setIdAdmin] = useState();
    const [nis, setNis] = useState();
    const [nip, setNip] = useState();
    const [password, setPassword] = useState();

    const [formAdminVisible, setFormAdminVisible] = useState(false);
    const [formGuruVisible, setFormGuruVisible] = useState(false);
    const [formSiswaVisible, setFormSiswaVisible] = useState(false);

    const handleLoginAdmin = () => {
        Inertia.post("/login/admin", {
            idAdmin,
            password,
        });
    };

    const handleLoginGuru = () => {
        Inertia.post("/login/guru",{
            nip,
            password,
        });
    };

    const handleLoginSiswa = () => {
        Inertia.post("/login/siswa", {
            nis,
            password,
        });
    };

return(

    <div>
        <Head title="Login"/>

        <div className="header">
            <img src="/gambar/header.jpg" height="40%" width="100%" alt="Header" />
        </div>

        <div className="menu">
            <b><a href="#" className="active">Home</a></b>
        </div>

        <div className="kiri-atas">
            <fieldset>
                <legend></legend>
                <center>
                    <button className="button-primary" onClick={()=>{
                        setFormAdminVisible(!formAdminVisible);
                        setFormGuruVisible(false);
                        setFormSiswaVisible(false);
                    }}
                    >Admin</button>

                    <button className="button-primary" onClick={()=>{
                        setFormAdminVisible(false);
                        setFormGuruVisible(!formGuruVisible);
                        setFormSiswaVisible(false);
                    }}
                    >Guru</button>

                    <button className="button-primary" onClick={()=>{
                        setFormAdminVisible(false);
                        setFormGuruVisible(false);
                        setFormSiswaVisible(!formSiswaVisible);
                    }}
                    >Siswa</button>

                    <hr />
                    <b>Login Sesuai Dengan Anda</b>
                    <hr />

                    </center>
                    

                    {/* ---------- Form Login Admin ---------- */}

                    <center>
                    <br />
                    <br />

                        <div style={{ display:formAdminVisible ? "block" : "none"}}>

                            <table width="50%">

                                <tr>
                                    <td width="25%">Kode Admin</td>
                                    <td width="25%">
                                        <input type="text" onChange={(e)=>
                                            setIdAdmin(e.target.value)} />
                                    </td>
                                </tr>
                                <tr>
                                    <td width="25%">Password</td>
                                    <td>
                                        <input type="password" onChange={(e) =>
                                            setPassword(e.target.value)}/>
                                    </td>
                                </tr>
                                <tr>
                                    <td colSpan="2">
                                        <center>
                                            <button className="button-primary" type="button" 
                                                    onClick={handleLoginAdmin}>
                                                Login
                                            </button>
                                        </center>

                                    </td>
                                </tr>
                                


                            </table>
                        

                    </div>

                    </center>

                    {/* ---------- Form Login Guru ---------- */}

                    <center>

                        <div style={{ display:formGuruVisible ? "block" : "none"}}>

                            <table width="50%">

                                <tr>
                                    <td width="25%">NIP</td>
                                    <td width="25%">
                                        <input type="text" onChange={(e)=>
                                            setNip(e.target.value)} />
                                    </td>
                                </tr>
                                <tr>
                                    <td width="25%">Password</td>
                                    <td>
                                        <input type="password" onChange={(e) =>
                                            setPassword(e.target.value)}/>
                                    </td>
                                </tr>
                                <tr>
                                    <td colSpan="2">
                                        <center>
                                            <button className="button-primary" type="button" 
                                                    onClick={handleLoginGuru}>
                                                Login
                                            </button>
                                        </center>

                                    </td>
                                </tr>
                                


                            </table>
                        

                    </div>

                    </center>

                    {/* ---------- Form Login Guru ---------- */}

                    <center>

                        <div style={{ display:formSiswaVisible ? "block" : "none"}}>

                            <table>

                                <tr>
                                    <td width="25%">NIS</td>
                                    <td width="25%">
                                        <input type="text" onChange={(e)=>
                                            setNis(e.target.value)} />
                                    </td>
                                </tr>
                                <tr>
                                    <td width="25%">Password</td>
                                    <td>
                                        <input type="password" onChange={(e) =>
                                            setPassword(e.target.value)}/>
                                    </td>
                                </tr>
                                <tr>
                                    <td colSpan="2">
                                        <center>
                                            <button className="button-primary" type="button" 
                                                    onClick={handleLoginSiswa}>
                                                Login
                                            </button>
                                        </center>

                                    </td>
                                </tr>
                                


                            </table>
                        

                    </div>

                    </center>
            </fieldset>
        </div>

                    <div className="kanan">
                        <center>
                            <h1>Selamat Datang
                                <br />
                                Di Website SMKN 1 Cibinong
                            </h1>
                        </center>
                    </div>

                    <div className="kiri-bawah">
                        <center>
                            <p className="gallery"></p>
                            <img src="/gambar/g2.jpg" alt="" />
                            <div className="">SMK bisa</div>
                        </center>
                    </div>             
        

    </div>
    

);

}