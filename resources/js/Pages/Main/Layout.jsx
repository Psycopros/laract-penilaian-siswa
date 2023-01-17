import { React } from "react";
import "../../../css/style.css";
import HeaderImage from "../../../src/images/header.jpg";
import { Link, usePage } from "@inertiajs/inertia-react";
import { Inertia } from "@inertiajs/inertia";

export default function Layout({children}){
    const { user } = usePage().props.auth
    return(

        <div>
        
        {/* Header  */}

        <div className="header">
            <img src={HeaderImage} width="100%" height="40%"  alt="" />
        </div>

        {/* Menu  */}
        <div className="menu">
            <b>
                <a href="/home">Home</a>
                {/* {user?.role == 'admin' ? ( */}
                  <div>
                     <a href="/guru/index">Guru</a>
                     <a href="/jurusan/index">Jurusan</a>
                     <a href="/kelas/index">Kelas</a>
                     <a href="/siswa/index">siswa</a>
                     <a href="/mapel/index">mapel</a>
                     <a href="/mengajar/index">mengajar</a>

                  </div>
                   
                {/* ) : (  */}
                    <a href="/nilai/index"></a>
                {/* ) */}
            {/* } */}

            </b>
        </div>

        {/* Content  */}
        <div className="content">{children}</div>

        {/* Footer  */}
        <div className="footer">
            <b>
                <p className="mar">2023 - Ujikom & LSP </p>
            </b>
        </div>

        </div>

        
       

    );
}