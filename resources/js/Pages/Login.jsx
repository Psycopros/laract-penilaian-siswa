import { Inertia } from "@inertiajs/inertia";
import { Head } from "@inertiajs/inertia-react";
import React, { useState } from "react";
import { usePage } from "@inertiajs/inertia-react";
import "../../../resources/css/styles.css;"

export default function login(){
    const {error} = usePage().props.errors;
    const [idAdmin, setIdAdmin] = useState();
    const [nis, setNis] = useState();
    const [nip, setNip] = useState();
    const [password, setPasword] = useState();

    const [formAdminVisible, setFormAdminVisible] = useState(false);
    const [formGuruVisible, setFormGuruVisible] = useState(false);
    const [formSiswaVisible, setFormsiswaVisible] = useState(false);
}