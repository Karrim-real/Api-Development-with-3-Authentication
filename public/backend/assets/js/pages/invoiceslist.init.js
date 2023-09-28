function getTime(e) {
    if (null != (e = new Date(e)).getHours())
        return e.getHours() + ":" + (e.getMinutes() ? e.getMinutes() : 0);
}
function tConvert(e) {
    var e = new Date(e),
        e = (time_s = e.getHours() + ":" + e.getMinutes()).split(":"),
        t = e[0],
        e = e[1],
        a = 12 <= t ? "PM" : "AM";
    return (t = (t %= 12) || 12) + ":" + (e < 10 ? "0" + e : e) + " " + a;
}
var invoice_new_obj,
    str_dt = function (e) {
        var e = new Date(e),
            t =
                "" +
                [
                    "Jan",
                    "Feb",
                    "Mar",
                    "Apr",
                    "May",
                    "Jun",
                    "Jul",
                    "Aug",
                    "Sep",
                    "Oct",
                    "Nov",
                    "Dec",
                ][e.getMonth()],
            a = "" + e.getDate(),
            e = e.getFullYear();
        return (
            t.length < 2 && (t = "0" + t),
            [(a = a.length < 2 ? "0" + a : a) + " " + t, e].join(", ")
        );
    },
    date = new Date(),
    d = date.getDate(),
    m = date.getMonth(),
    y = date.getFullYear(),
    qty = 0,
    rate = 0,
    Invoices = [
        {
            invoice_no: "25000351",
            customer: "Valentine Morin",
            img: "avatar-1.jpg",
            email: "euismod.enim@outlook.net",
            date: new Date(2021, 3, d - 23, 21, 58),
            invoice_amount: 875,
            status: "Paid",
            billing_address: {
                full_name: "Valentine Morin",
                address: "5114 Adipiscing St. Puno United States 46782",
                phone: "(926) 817-7835",
                tax: "123456789",
            },
            shipping_address: {
                full_name: "Quamar Payne",
                address: "534-1477 Non, Av. Bury St. Edmunds France 10846",
                phone: "(926) 817-7835",
                tax: "123456789",
            },
            prducts: [
                {
                    product_name: "Sweatshirt for Men (Pink)",
                    product_details: "Graphic Print Men & Women Sweatshirt",
                    rates: (rate = 119.99),
                    quantity: (qty = 2),
                    amount: rate * qty,
                },
                {
                    product_name: "Noise NoiseFit Endure Smart Watch",
                    product_details:
                        "32.5mm (1.28 Inch) TFT Color Touch Display",
                    rates: (rate = 94.99),
                    quantity: (qty = 1),
                    amount: rate * qty,
                },
                {
                    product_name: "350 ml Glass Grocery Container",
                    product_details:
                        "Glass Grocery Container (Pack of 3, White)",
                    rates: (rate = 24.99),
                    quantity: (qty = 1),
                    amount: rate * qty,
                },
            ],
            payment_details: {
                payment_method: "VISA",
                card_holder_name: "Reese Jacobs",
                card_number: "4024007179348742",
                total_amount: 415.96,
            },
            company_details: {
                legal_registration_no: "987654",
                email: "velzon@themesbrand.com",
                website: "www.themesbrand.com",
                contact_no: "0123456789",
                address: "California, United States",
                zip_code: "90201",
            },
            order_summary: {
                sub_total: 359.96,
                estimated_tex: 44.99,
                discount: 53.99,
                shipping_charge: 65,
                total_amount: 415.96,
            },
            notes: "All accounts are to be paid within 7 days from receipt of invoice. To be paid by cheque or credit card or direct payment online. If account is not paid within 7 days the credits details supplied as confirmation of work undertaken will be charged the agreed quoted fee noted above.",
        },
        {
            invoice_no: "25000352",
            customer: "Brody Holman",
            img: "avatar-2.jpg",
            email: "metus@protonmail.org",
            date: new Date(2021, 5, d - 23, 21, 58),
            invoice_amount: 875,
            status: "Unpaid",
            billing_address: {
                full_name: "Brody Holman",
                address:
                    "P.O. Box 900 Ireland, 6694 Ullamcorper Avenue Port Pirie 37176",
                phone: "1-862-423-3347",
                tax: "123456789",
            },
            shipping_address: {
                full_name: "Elijah Galloway",
                address: "7288 Dignissim Rd. Villa Alegre Germany 891315",
                phone: "1-862-423-3347",
                tax: "123456789",
            },
            prducts: [
                {
                    product_name: "Sweatshirt for Men (Pink)",
                    product_details: "Graphic Print Men & Women Sweatshirt",
                    rates: (rate = 119.99),
                    quantity: (qty = 2),
                    amount: rate * qty,
                },
                {
                    product_name: "Noise NoiseFit Endure Smart Watch",
                    product_details:
                        "32.5mm (1.28 Inch) TFT Color Touch Display",
                    rates: (rate = 94.99),
                    quantity: (qty = 1),
                    amount: rate * qty,
                },
                {
                    product_name: "350 ml Glass Grocery Container",
                    product_details:
                        "Glass Grocery Container (Pack of 3, White)",
                    rates: (rate = 24.99),
                    quantity: (qty = 1),
                    amount: rate * qty,
                },
            ],
            payment_details: {
                payment_method: "VISA",
                card_holder_name: "Rashawn Kuhn",
                card_number: "4916669499578927",
                total_amount: 415.96,
            },
            company_details: {
                legal_registration_no: "987654",
                email: "velzon@themesbrand.com",
                website: "www.themesbrand.com",
                contact_no: "0123456789",
                address: "California, United States",
                zip_code: "90201",
            },
            order_summary: {
                sub_total: 359.96,
                estimated_tex: 44.99,
                discount: 53.99,
                shipping_charge: 65,
                total_amount: 415.96,
            },
            notes: "All accounts are to be paid within 7 days from receipt of invoice. To be paid by cheque or credit card or direct payment online. If account is not paid within 7 days the credits details supplied as confirmation of work undertaken will be charged the agreed quoted fee noted above.",
        },
        {
            invoice_no: "25000353",
            customer: "Jolie Hood",
            img: "avatar-3.jpg",
            email: "nunc.nulla@yahoo.edu",
            date: new Date(2021, 3, d - 23, 21, 58),
            invoice_amount: 875,
            status: "Paid",
            billing_address: {
                full_name: "Jolie Hood",
                address: "Ap #957-7519 Vel, Belgium St. Diêm Điền 88188-296",
                phone: "1-634-649-4101",
                tax: "123456789",
            },
            shipping_address: {
                full_name: "MacKensie Peterson",
                address: "572-7561 Tempus Ave Alajuela Spain 86558",
                phone: "1-634-649-4101",
                tax: "123456789",
            },
            prducts: [
                {
                    product_name: "Sweatshirt for Men (Pink)",
                    product_details: "Graphic Print Men & Women Sweatshirt",
                    rates: (rate = 119.99),
                    quantity: (qty = 2),
                    amount: rate * qty,
                },
                {
                    product_name: "Noise NoiseFit Endure Smart Watch",
                    product_details:
                        "32.5mm (1.28 Inch) TFT Color Touch Display",
                    rates: (rate = 94.99),
                    quantity: (qty = 1),
                    amount: rate * qty,
                },
                {
                    product_name: "350 ml Glass Grocery Container",
                    product_details:
                        "Glass Grocery Container (Pack of 3, White)",
                    rates: (rate = 24.99),
                    quantity: (qty = 1),
                    amount: rate * qty,
                },
            ],
            payment_details: {
                payment_method: "VISA",
                card_holder_name: "Izaiah O'Kon",
                card_number: "4486013431082211",
                total_amount: 415.96,
            },
            company_details: {
                legal_registration_no: "987654",
                email: "velzon@themesbrand.com",
                website: "www.themesbrand.com",
                contact_no: "0123456789",
                address: "California, United States",
                zip_code: "90201",
            },
            order_summary: {
                sub_total: 359.96,
                estimated_tex: 44.99,
                discount: 53.99,
                shipping_charge: 65,
                total_amount: 415.96,
            },
            notes: "All accounts are to be paid within 7 days from receipt of invoice. To be paid by cheque or credit card or direct payment online. If account is not paid within 7 days the credits details supplied as confirmation of work undertaken will be charged the agreed quoted fee noted above.",
        },
        {
            invoice_no: "25000354",
            customer: "Buckminster Wong",
            img: "avatar-4.jpg",
            email: "morbi.quis@protonmail.org",
            date: new Date(2021, 8, d - 22, 21, 58),
            invoice_amount: 875,
            status: "Paid",
            billing_address: {
                full_name: "Buckminster Wong",
                address: "983-8399 Egestas, Rd Spain. Penza 6596",
                phone: "(922) 264-4841",
                tax: "123456789",
            },
            shipping_address: {
                full_name: "Emerson Riggs",
                address: "916-4370 Aliquet Avenue Nordhorn Spain 3200",
                phone: "(922) 264-4841",
                tax: "123456789",
            },
            prducts: [
                {
                    product_name: "Sweatshirt for Men (Pink)",
                    product_details: "Graphic Print Men & Women Sweatshirt",
                    rates: (rate = 119.99),
                    quantity: (qty = 2),
                    amount: rate * qty,
                },
                {
                    product_name: "Noise NoiseFit Endure Smart Watch",
                    product_details:
                        "32.5mm (1.28 Inch) TFT Color Touch Display",
                    rates: (rate = 94.99),
                    quantity: (qty = 1),
                    amount: rate * qty,
                },
                {
                    product_name: "350 ml Glass Grocery Container",
                    product_details:
                        "Glass Grocery Container (Pack of 3, White)",
                    rates: (rate = 24.99),
                    quantity: (qty = 1),
                    amount: rate * qty,
                },
            ],
            payment_details: {
                payment_method: "VISA",
                card_holder_name: "Felicity McGlynn",
                card_number: "4532135177402156",
                total_amount: 415.96,
            },
            company_details: {
                legal_registration_no: "987654",
                email: "velzon@themesbrand.com",
                website: "www.themesbrand.com",
                contact_no: "0123456789",
                address: "California, United States",
                zip_code: "90201",
            },
            order_summary: {
                sub_total: 359.96,
                estimated_tex: 44.99,
                discount: 53.99,
                shipping_charge: 65,
                total_amount: 415.96,
            },
            notes: "All accounts are to be paid within 7 days from receipt of invoice. To be paid by cheque or credit card or direct payment online. If account is not paid within 7 days the credits details supplied as confirmation of work undertaken will be charged the agreed quoted fee noted above.",
        },
        {
            invoice_no: "25000355",
            customer: "Howard Lyons",
            img: "",
            email: "neque.sed.dictum@icloud.org",
            date: new Date(2021, 3, d - 23, 21, 58),
            invoice_amount: 875,
            status: "Refund",
            billing_address: {
                full_name: "Howard Lyons",
                address: "Ap #552-1397 Ac Rd Germany. Barmouth 8574",
                phone: "1-434-874-6805",
                tax: "123456789",
            },
            shipping_address: {
                full_name: "Britanni Daniel",
                address:
                    "P.O. Box 998, 9293 Quisque Avenue Puerto Montt Poland 82862",
                phone: "1-434-874-6805",
                tax: "123456789",
            },
            prducts: [
                {
                    product_name: "Sweatshirt for Men (Pink)",
                    product_details: "Graphic Print Men & Women Sweatshirt",
                    rates: (rate = 119.99),
                    quantity: (qty = 2),
                    amount: rate * qty,
                },
                {
                    product_name: "Noise NoiseFit Endure Smart Watch",
                    product_details:
                        "32.5mm (1.28 Inch) TFT Color Touch Display",
                    rates: (rate = 94.99),
                    quantity: (qty = 1),
                    amount: rate * qty,
                },
                {
                    product_name: "350 ml Glass Grocery Container",
                    product_details:
                        "Glass Grocery Container (Pack of 3, White)",
                    rates: (rate = 24.99),
                    quantity: (qty = 1),
                    amount: rate * qty,
                },
            ],
            payment_details: {
                payment_method: "VISA",
                card_holder_name: "David Gleason",
                card_number: "4024007183253102",
                total_amount: 415.96,
            },
            company_details: {
                legal_registration_no: "987654",
                email: "velzon@themesbrand.com",
                website: "www.themesbrand.com",
                contact_no: "0123456789",
                address: "California, United States",
                zip_code: "90201",
            },
            order_summary: {
                sub_total: 359.96,
                estimated_tex: 44.99,
                discount: 53.99,
                shipping_charge: 65,
                total_amount: 415.96,
            },
            notes: "All accounts are to be paid within 7 days from receipt of invoice. To be paid by cheque or credit card or direct payment online. If account is not paid within 7 days the credits details supplied as confirmation of work undertaken will be charged the agreed quoted fee noted above.",
        },
        {
            invoice_no: "25000356",
            customer: "Howard Oneal",
            img: "avatar-6.jpg",
            email: "porttitor.tellus.non@yahoo.net",
            date: new Date(2021, 3, d - 23, 21, 58),
            invoice_amount: 875,
            status: "Paid",
            billing_address: {
                full_name: "Howard Oneal",
                address: "5642 Aliquam, Avenue Zielona Costa Rica Góra 21204",
                phone: "1-546-878-8131",
                tax: "123456789",
            },
            shipping_address: {
                full_name: "Salvador Carney",
                address: "715-6973 Non St. Samara Peru 10513",
                phone: "1-546-878-8131",
                tax: "123456789",
            },
            prducts: [
                {
                    product_name: "Sweatshirt for Men (Pink)",
                    product_details: "Graphic Print Men & Women Sweatshirt",
                    rates: (rate = 119.99),
                    quantity: (qty = 2),
                    amount: rate * qty,
                },
                {
                    product_name: "Noise NoiseFit Endure Smart Watch",
                    product_details:
                        "32.5mm (1.28 Inch) TFT Color Touch Display",
                    rates: (rate = 94.99),
                    quantity: (qty = 1),
                    amount: rate * qty,
                },
                {
                    product_name: "350 ml Glass Grocery Container",
                    product_details:
                        "Glass Grocery Container (Pack of 3, White)",
                    rates: (rate = 24.99),
                    quantity: (qty = 1),
                    amount: rate * qty,
                },
            ],
            payment_details: {
                payment_method: "VISA",
                card_holder_name: "Reta Lang",
                card_number: "4716482226172291",
                total_amount: 415.96,
            },
            company_details: {
                legal_registration_no: "987654",
                email: "velzon@themesbrand.com",
                website: "www.themesbrand.com",
                contact_no: "0123456789",
                address: "California, United States",
                zip_code: "90201",
            },
            order_summary: {
                sub_total: 359.96,
                estimated_tex: 44.99,
                discount: 53.99,
                shipping_charge: 65,
                total_amount: 415.96,
            },
            notes: "All accounts are to be paid within 7 days from receipt of invoice. To be paid by cheque or credit card or direct payment online. If account is not paid within 7 days the credits details supplied as confirmation of work undertaken will be charged the agreed quoted fee noted above.",
        },
        {
            invoice_no: "25000357",
            customer: "Jena Hall",
            img: "avatar-7.jpg",
            email: "lectus.sit.amet@protonmail.edu",
            date: new Date(2021, 3, d - 23, 21, 58),
            invoice_amount: 875,
            status: "Cancel",
            billing_address: {
                full_name: "Jena Hall",
                address:
                    "P.O. Box 332 Italy, 5256 Dignissim St. Juazeiro do Norte 646442",
                phone: "(587) 848-3170",
                tax: "123456789",
            },
            shipping_address: {
                full_name: "Kieran Holland",
                address:
                    "150-7530 Egestas Av. Panchià Russian Federation 16807",
                phone: "(587) 848-3170",
                tax: "123456789",
            },
            prducts: [
                {
                    product_name: "Sweatshirt for Men (Pink)",
                    product_details: "Graphic Print Men & Women Sweatshirt",
                    rates: (rate = 119.99),
                    quantity: (qty = 2),
                    amount: rate * qty,
                },
                {
                    product_name: "Noise NoiseFit Endure Smart Watch",
                    product_details:
                        "32.5mm (1.28 Inch) TFT Color Touch Display",
                    rates: (rate = 94.99),
                    quantity: (qty = 1),
                    amount: rate * qty,
                },
                {
                    product_name: "350 ml Glass Grocery Container",
                    product_details:
                        "Glass Grocery Container (Pack of 3, White)",
                    rates: (rate = 24.99),
                    quantity: (qty = 1),
                    amount: rate * qty,
                },
            ],
            payment_details: {
                payment_method: "VISA",
                card_holder_name: "Donna Hilpert",
                card_number: "4485110978669599",
                total_amount: 415.96,
            },
            company_details: {
                legal_registration_no: "987654",
                email: "velzon@themesbrand.com",
                website: "www.themesbrand.com",
                contact_no: "0123456789",
                address: "California, United States",
                zip_code: "90201",
            },
            order_summary: {
                sub_total: 359.96,
                estimated_tex: 44.99,
                discount: 53.99,
                shipping_charge: 65,
                total_amount: 415.96,
            },
            notes: "All accounts are to be paid within 7 days from receipt of invoice. To be paid by cheque or credit card or direct payment online. If account is not paid within 7 days the credits details supplied as confirmation of work undertaken will be charged the agreed quoted fee noted above.",
        },
        {
            invoice_no: "25000358",
            customer: "Paki Edwards",
            img: "avatar-8.jpg",
            email: "dictum.phasellus.in@hotmail.org",
            date: new Date(2021, 3, d - 23, 21, 58),
            invoice_amount: 875,
            status: "Paid",
            billing_address: {
                full_name: "Paki Edwards",
                address: "2935 Senectus Av. Tvedestrand Germany 66479",
                phone: "(287) 406-9128",
                tax: "123456789",
            },
            shipping_address: {
                full_name: "Yoshio Skinner",
                address: "101-9784 Metus Rd. Minitonas Mexico 19-154",
                phone: "(287) 406-9128",
                tax: "123456789",
            },
            prducts: [
                {
                    product_name: "Sweatshirt for Men (Pink)",
                    product_details: "Graphic Print Men & Women Sweatshirt",
                    rates: (rate = 119.99),
                    quantity: (qty = 2),
                    amount: rate * qty,
                },
                {
                    product_name: "Noise NoiseFit Endure Smart Watch",
                    product_details:
                        "32.5mm (1.28 Inch) TFT Color Touch Display",
                    rates: (rate = 94.99),
                    quantity: (qty = 1),
                    amount: rate * qty,
                },
                {
                    product_name: "350 ml Glass Grocery Container",
                    product_details:
                        "Glass Grocery Container (Pack of 3, White)",
                    rates: (rate = 24.99),
                    quantity: (qty = 1),
                    amount: rate * qty,
                },
            ],
            payment_details: {
                payment_method: "VISA",
                card_holder_name: "Evelyn Miller",
                card_number: "4609615071890505",
                total_amount: 415.96,
            },
            company_details: {
                legal_registration_no: "987654",
                email: "velzon@themesbrand.com",
                website: "www.themesbrand.com",
                contact_no: "0123456789",
                address: "California, United States",
                zip_code: "90201",
            },
            order_summary: {
                sub_total: 359.96,
                estimated_tex: 44.99,
                discount: 53.99,
                shipping_charge: 65,
                total_amount: 415.96,
            },
            notes: "All accounts are to be paid within 7 days from receipt of invoice. To be paid by cheque or credit card or direct payment online. If account is not paid within 7 days the credits details supplied as confirmation of work undertaken will be charged the agreed quoted fee noted above.",
        },
        {
            invoice_no: "25000359",
            customer: "Christian Cardenas",
            img: "avatar-1.jpg",
            email: "id.erat@aol.org",
            date: new Date(2022, 1, d - 20, 21, 58),
            invoice_amount: 875,
            status: "Paid",
            billing_address: {
                full_name: "Christian Cardenas",
                address: "414-240 Odio. Rd Vietnam. Louisville 41715",
                phone: "1-681-342-7158",
                tax: "123456789",
            },
            shipping_address: {
                full_name: "Linus Pitts",
                address: "Ap #280-7347 Libero. Rd. Yurimaguas Italy 881484",
                phone: "1-681-342-7158",
                tax: "123456789",
            },
            prducts: [
                {
                    product_name: "Sweatshirt for Men (Pink)",
                    product_details: "Graphic Print Men & Women Sweatshirt",
                    rates: (rate = 119.99),
                    quantity: (qty = 2),
                    amount: rate * qty,
                },
                {
                    product_name: "Noise NoiseFit Endure Smart Watch",
                    product_details:
                        "32.5mm (1.28 Inch) TFT Color Touch Display",
                    rates: (rate = 94.99),
                    quantity: (qty = 1),
                    amount: rate * qty,
                },
                {
                    product_name: "350 ml Glass Grocery Container",
                    product_details:
                        "Glass Grocery Container (Pack of 3, White)",
                    rates: (rate = 24.99),
                    quantity: (qty = 1),
                    amount: rate * qty,
                },
            ],
            payment_details: {
                payment_method: "VISA",
                card_holder_name: "Cleora Cole",
                card_number: "4011376293886159",
                total_amount: 415.96,
            },
            company_details: {
                legal_registration_no: "987654",
                email: "velzon@themesbrand.com",
                website: "www.themesbrand.com",
                contact_no: "0123456789",
                address: "California, United States",
                zip_code: "90201",
            },
            order_summary: {
                sub_total: 359.96,
                estimated_tex: 44.99,
                discount: 53.99,
                shipping_charge: 65,
                total_amount: 415.96,
            },
            notes: "All accounts are to be paid within 7 days from receipt of invoice. To be paid by cheque or credit card or direct payment online. If account is not paid within 7 days the credits details supplied as confirmation of work undertaken will be charged the agreed quoted fee noted above.",
        },
        {
            invoice_no: "25000360",
            customer: "Yoshi Guerra",
            img: "avatar-2.jpg",
            email: "sem.magna.nec@hotmail.ca",
            date: new Date(2021, 3, d - 23, 21, 58),
            invoice_amount: 875,
            status: "Paid",
            billing_address: {
                full_name: "Yoshi Guerra",
                address: "Ap #322-2982 Lacinia Road India Moss 309511",
                phone: "1-514-596-7650",
                tax: "123456789",
            },
            shipping_address: {
                full_name: "Otto Farrell",
                address: "Ap #827-2319 Eu Ave Bima Norway 1663",
                phone: "1-514-596-7650",
                tax: "123456789",
            },
            prducts: [
                {
                    product_name: "Sweatshirt for Men (Pink)",
                    product_details: "Graphic Print Men & Women Sweatshirt",
                    rates: (rate = 119.99),
                    quantity: (qty = 2),
                    amount: rate * qty,
                },
                {
                    product_name: "Noise NoiseFit Endure Smart Watch",
                    product_details:
                        "32.5mm (1.28 Inch) TFT Color Touch Display",
                    rates: (rate = 94.99),
                    quantity: (qty = 1),
                    amount: rate * qty,
                },
                {
                    product_name: "350 ml Glass Grocery Container",
                    product_details:
                        "Glass Grocery Container (Pack of 3, White)",
                    rates: (rate = 24.99),
                    quantity: (qty = 1),
                    amount: rate * qty,
                },
            ],
            payment_details: {
                payment_method: "VISA",
                card_holder_name: "Blaise Quigley",
                card_number: "4929663041722401",
                total_amount: 415.96,
            },
            company_details: {
                legal_registration_no: "987654",
                email: "velzon@themesbrand.com",
                website: "www.themesbrand.com",
                contact_no: "0123456789",
                address: "California, United States",
                zip_code: "90201",
            },
            order_summary: {
                sub_total: 359.96,
                estimated_tex: 44.99,
                discount: 53.99,
                shipping_charge: 65,
                total_amount: 415.96,
            },
            notes: "All accounts are to be paid within 7 days from receipt of invoice. To be paid by cheque or credit card or direct payment online. If account is not paid within 7 days the credits details supplied as confirmation of work undertaken will be charged the agreed quoted fee noted above.",
        },
        {
            invoice_no: "25000361",
            customer: "Hilel Gillespie",
            img: "avatar-3.jpg",
            email: "enim.nunc@yahoo.edu",
            date: new Date(2021, 3, d - 23, 21, 58),
            invoice_amount: 875,
            status: "Paid",
            billing_address: {
                full_name: "Hilel Gillespie",
                address: "848-2883 At Street Kalisz United Kingdom 687132",
                phone: "(451) 816-7296",
                tax: "123456789",
            },
            shipping_address: {
                full_name: "Dacey Villarreal",
                address: "292-7088 In Road Rawalakot New Zealand 6842",
                phone: "(451) 816-7296",
                tax: "123456789",
            },
            prducts: [
                {
                    product_name: "Sweatshirt for Men (Pink)",
                    product_details: "Graphic Print Men & Women Sweatshirt",
                    rates: (rate = 119.99),
                    quantity: (qty = 2),
                    amount: rate * qty,
                },
                {
                    product_name: "Noise NoiseFit Endure Smart Watch",
                    product_details:
                        "32.5mm (1.28 Inch) TFT Color Touch Display",
                    rates: (rate = 94.99),
                    quantity: (qty = 1),
                    amount: rate * qty,
                },
                {
                    product_name: "350 ml Glass Grocery Container",
                    product_details:
                        "Glass Grocery Container (Pack of 3, White)",
                    rates: (rate = 24.99),
                    quantity: (qty = 1),
                    amount: rate * qty,
                },
            ],
            payment_details: {
                payment_method: "VISA",
                card_holder_name: "Hollie Zboncak",
                card_number: "4828772787474622",
                total_amount: 415.96,
            },
            company_details: {
                legal_registration_no: "987654",
                email: "velzon@themesbrand.com",
                website: "www.themesbrand.com",
                contact_no: "0123456789",
                address: "California, United States",
                zip_code: "90201",
            },
            order_summary: {
                sub_total: 359.96,
                estimated_tex: 44.99,
                discount: 53.99,
                shipping_charge: 65,
                total_amount: 415.96,
            },
            notes: "All accounts are to be paid within 7 days from receipt of invoice. To be paid by cheque or credit card or direct payment online. If account is not paid within 7 days the credits details supplied as confirmation of work undertaken will be charged the agreed quoted fee noted above.",
        },
        {
            invoice_no: "25000362",
            customer: "Randall Stafford",
            img: "avatar-4.jpg",
            email: "eget.lacus@outlook.org",
            date: new Date(2021, 3, d - 23, 21, 58),
            invoice_amount: 875,
            status: "Paid",
            billing_address: {
                full_name: "Randall Stafford",
                address: "P.O. Box 583 Colombia, 2640 Aliquam Ave Toruń 456387",
                phone: "1-340-324-3678",
                tax: "123456789",
            },
            shipping_address: {
                full_name: "Shana Hudson",
                address: "Ap #973-232 Non, St. Tibet Sweden GW0R 2VR",
                phone: "1-340-324-3678",
                tax: "123456789",
            },
            prducts: [
                {
                    product_name: "Sweatshirt for Men (Pink)",
                    product_details: "Graphic Print Men & Women Sweatshirt",
                    rates: (rate = 119.99),
                    quantity: (qty = 2),
                    amount: rate * qty,
                },
                {
                    product_name: "Noise NoiseFit Endure Smart Watch",
                    product_details:
                        "32.5mm (1.28 Inch) TFT Color Touch Display",
                    rates: (rate = 94.99),
                    quantity: (qty = 1),
                    amount: rate * qty,
                },
                {
                    product_name: "350 ml Glass Grocery Container",
                    product_details:
                        "Glass Grocery Container (Pack of 3, White)",
                    rates: (rate = 24.99),
                    quantity: (qty = 1),
                    amount: rate * qty,
                },
            ],
            payment_details: {
                payment_method: "MasterCard",
                card_holder_name: "Kameron Barrows",
                card_number: "2720686256191298",
                total_amount: 415.96,
            },
            company_details: {
                legal_registration_no: "987654",
                email: "velzon@themesbrand.com",
                website: "www.themesbrand.com",
                contact_no: "0123456789",
                address: "California, United States",
                zip_code: "90201",
            },
            order_summary: {
                sub_total: 359.96,
                estimated_tex: 44.99,
                discount: 53.99,
                shipping_charge: 65,
                total_amount: 415.96,
            },
            notes: "All accounts are to be paid within 7 days from receipt of invoice. To be paid by cheque or credit card or direct payment online. If account is not paid within 7 days the credits details supplied as confirmation of work undertaken will be charged the agreed quoted fee noted above.",
        },
        {
            invoice_no: "25000363",
            customer: "Fletcher Jones",
            img: "avatar-5.jpg",
            email: "sapien.cursus@google.couk",
            date: new Date(2021, 3, d - 23, 21, 58),
            invoice_amount: 875,
            status: "Paid",
            billing_address: {
                full_name: "Fletcher Jones",
                address:
                    "P.O. Box 951 New Zealand, 1480 Venenatis Ave Swat 152307",
                phone: "(433) 436-0003",
                tax: "123456789",
            },
            shipping_address: {
                full_name: "Fitzgerald Rice",
                address: "314-372 Facilisis Rd. Nancy Turkey E2K 1HY",
                phone: "(433) 436-0003",
                tax: "123456789",
            },
            prducts: [
                {
                    product_name: "Sweatshirt for Men (Pink)",
                    product_details: "Graphic Print Men & Women Sweatshirt",
                    rates: (rate = 119.99),
                    quantity: (qty = 2),
                    amount: rate * qty,
                },
                {
                    product_name: "Noise NoiseFit Endure Smart Watch",
                    product_details:
                        "32.5mm (1.28 Inch) TFT Color Touch Display",
                    rates: (rate = 94.99),
                    quantity: (qty = 1),
                    amount: rate * qty,
                },
                {
                    product_name: "350 ml Glass Grocery Container",
                    product_details:
                        "Glass Grocery Container (Pack of 3, White)",
                    rates: (rate = 24.99),
                    quantity: (qty = 1),
                    amount: rate * qty,
                },
            ],
            payment_details: {
                payment_method: "MasterCard",
                card_holder_name: "Gus Thiel",
                card_number: "2221197016300538",
                total_amount: 415.96,
            },
            company_details: {
                legal_registration_no: "987654",
                email: "velzon@themesbrand.com",
                website: "www.themesbrand.com",
                contact_no: "0123456789",
                address: "California, United States",
                zip_code: "90201",
            },
            order_summary: {
                sub_total: 359.96,
                estimated_tex: 44.99,
                discount: 53.99,
                shipping_charge: 65,
                total_amount: 415.96,
            },
            notes: "All accounts are to be paid within 7 days from receipt of invoice. To be paid by cheque or credit card or direct payment online. If account is not paid within 7 days the credits details supplied as confirmation of work undertaken will be charged the agreed quoted fee noted above.",
        },
        {
            invoice_no: "25000364",
            customer: "Donovan Sparks",
            img: "avatar-6.jpg",
            email: "urna.convallis@yahoo.net",
            date: new Date(2021, 3, d - 23, 21, 58),
            invoice_amount: 875,
            status: "Paid",
            billing_address: {
                full_name: "Donovan Sparks",
                address:
                    "176-4856 Hendrerit Av. France San Juan de Girón 58811-629",
                phone: "1-658-684-1084",
                tax: "123456789",
            },
            shipping_address: {
                full_name: "Georgia Nixon",
                address:
                    "Ap #599-1431 Non, St. Cartagena del Chairá United States 2548",
                phone: "1-658-684-1084",
                tax: "123456789",
            },
            prducts: [
                {
                    product_name: "Sweatshirt for Men (Pink)",
                    product_details: "Graphic Print Men & Women Sweatshirt",
                    rates: (rate = 119.99),
                    quantity: (qty = 2),
                    amount: rate * qty,
                },
                {
                    product_name: "Noise NoiseFit Endure Smart Watch",
                    product_details:
                        "32.5mm (1.28 Inch) TFT Color Touch Display",
                    rates: (rate = 94.99),
                    quantity: (qty = 1),
                    amount: rate * qty,
                },
                {
                    product_name: "350 ml Glass Grocery Container",
                    product_details:
                        "Glass Grocery Container (Pack of 3, White)",
                    rates: (rate = 24.99),
                    quantity: (qty = 1),
                    amount: rate * qty,
                },
            ],
            payment_details: {
                payment_method: "MasterCard",
                card_holder_name: "Emily Stokes",
                card_number: "2221426370404515",
                total_amount: 415.96,
            },
            company_details: {
                legal_registration_no: "987654",
                email: "velzon@themesbrand.com",
                website: "www.themesbrand.com",
                contact_no: "0123456789",
                address: "California, United States",
                zip_code: "90201",
            },
            order_summary: {
                sub_total: 359.96,
                estimated_tex: 44.99,
                discount: 53.99,
                shipping_charge: 65,
                total_amount: 415.96,
            },
            notes: "All accounts are to be paid within 7 days from receipt of invoice. To be paid by cheque or credit card or direct payment online. If account is not paid within 7 days the credits details supplied as confirmation of work undertaken will be charged the agreed quoted fee noted above.",
        },
        {
            invoice_no: "25000365",
            customer: "Sage Gardner",
            img: "avatar-7.jpg",
            email: "consequat.enim@google.com",
            date: new Date(2021, 3, d - 23, 21, 58),
            invoice_amount: 875,
            status: "Paid",
            billing_address: {
                full_name: "Sage Gardner",
                address:
                    "Ap #193-730 Orci, Chile Street San José de Alajuela 8317",
                phone: "(470) 328-1309",
                tax: "123456789",
            },
            shipping_address: {
                full_name: "Melinda Banks",
                address: "5778 Aliquam Road Ofena Italy 11218",
                phone: "(470) 328-1309",
                tax: "123456789",
            },
            prducts: [
                {
                    product_name: "Sweatshirt for Men (Pink)",
                    product_details: "Graphic Print Men & Women Sweatshirt",
                    rates: (rate = 119.99),
                    quantity: (qty = 2),
                    amount: rate * qty,
                },
                {
                    product_name: "Noise NoiseFit Endure Smart Watch",
                    product_details:
                        "32.5mm (1.28 Inch) TFT Color Touch Display",
                    rates: (rate = 94.99),
                    quantity: (qty = 1),
                    amount: rate * qty,
                },
                {
                    product_name: "350 ml Glass Grocery Container",
                    product_details:
                        "Glass Grocery Container (Pack of 3, White)",
                    rates: (rate = 24.99),
                    quantity: (qty = 1),
                    amount: rate * qty,
                },
            ],
            payment_details: {
                payment_method: "MasterCard",
                card_holder_name: "Salvador Gerlach",
                card_number: "5347125175526959",
                total_amount: 415.96,
            },
            company_details: {
                legal_registration_no: "987654",
                email: "velzon@themesbrand.com",
                website: "www.themesbrand.com",
                contact_no: "0123456789",
                address: "California, United States",
                zip_code: "90201",
            },
            order_summary: {
                sub_total: 359.96,
                estimated_tex: 44.99,
                discount: 53.99,
                shipping_charge: 65,
                total_amount: 415.96,
            },
            notes: "All accounts are to be paid within 7 days from receipt of invoice. To be paid by cheque or credit card or direct payment online. If account is not paid within 7 days the credits details supplied as confirmation of work undertaken will be charged the agreed quoted fee noted above.",
        },
        {
            invoice_no: "25000366",
            customer: "Paki Grimes",
            img: "avatar-1.jpg",
            email: "ante.lectus.convallis@google.com",
            date: new Date(2021, 3, d - 23, 21, 58),
            invoice_amount: 875,
            status: "Paid",
            billing_address: {
                full_name: "Paki Grimes",
                address:
                    "516-3641 Tincidunt St. Pakistan Zamora de Hidalgo 6554",
                phone: "(726) 823-5568",
                tax: "123456789",
            },
            shipping_address: {
                full_name: "Shaeleigh Wilkins",
                address: "961-3054 Integer St. Abergele United Kingdom 6746",
                phone: "(726) 823-5568",
                tax: "123456789",
            },
            prducts: [
                {
                    product_name: "Sweatshirt for Men (Pink)",
                    product_details: "Graphic Print Men & Women Sweatshirt",
                    rates: (rate = 119.99),
                    quantity: (qty = 2),
                    amount: rate * qty,
                },
                {
                    product_name: "Noise NoiseFit Endure Smart Watch",
                    product_details:
                        "32.5mm (1.28 Inch) TFT Color Touch Display",
                    rates: (rate = 94.99),
                    quantity: (qty = 1),
                    amount: rate * qty,
                },
                {
                    product_name: "350 ml Glass Grocery Container",
                    product_details:
                        "Glass Grocery Container (Pack of 3, White)",
                    rates: (rate = 24.99),
                    quantity: (qty = 1),
                    amount: rate * qty,
                },
            ],
            payment_details: {
                payment_method: "MasterCard",
                card_holder_name: "Marilyne Swift",
                card_number: "2221357276228023",
                total_amount: 415.96,
            },
            company_details: {
                legal_registration_no: "987654",
                email: "velzon@themesbrand.com",
                website: "www.themesbrand.com",
                contact_no: "0123456789",
                address: "California, United States",
                zip_code: "90201",
            },
            order_summary: {
                sub_total: 359.96,
                estimated_tex: 44.99,
                discount: 53.99,
                shipping_charge: 65,
                total_amount: 415.96,
            },
            notes: "All accounts are to be paid within 7 days from receipt of invoice. To be paid by cheque or credit card or direct payment online. If account is not paid within 7 days the credits details supplied as confirmation of work undertaken will be charged the agreed quoted fee noted above.",
        },
        {
            invoice_no: "25000367",
            customer: "James Diaz",
            img: "avatar-2.jpg",
            email: "nascetur@yahoo.com",
            date: new Date(2021, 3, d - 23, 21, 58),
            invoice_amount: 875,
            status: "Paid",
            billing_address: {
                full_name: "James Diaz",
                address:
                    "Ap #160-8536 Ante St Colombia. Santa Coloma de Gramenet 19475",
                phone: "1-989-241-7715",
                tax: "123456789",
            },
            shipping_address: {
                full_name: "Julian Tanner",
                address: "630-5275 Quis Street Kraków Canada E39 0RE",
                phone: "1-989-241-7715",
                tax: "123456789",
            },
            prducts: [
                {
                    product_name: "Sweatshirt for Men (Pink)",
                    product_details: "Graphic Print Men & Women Sweatshirt",
                    rates: (rate = 119.99),
                    quantity: (qty = 2),
                    amount: rate * qty,
                },
                {
                    product_name: "Noise NoiseFit Endure Smart Watch",
                    product_details:
                        "32.5mm (1.28 Inch) TFT Color Touch Display",
                    rates: (rate = 94.99),
                    quantity: (qty = 1),
                    amount: rate * qty,
                },
                {
                    product_name: "350 ml Glass Grocery Container",
                    product_details:
                        "Glass Grocery Container (Pack of 3, White)",
                    rates: (rate = 24.99),
                    quantity: (qty = 1),
                    amount: rate * qty,
                },
            ],
            payment_details: {
                payment_method: "MasterCard",
                card_holder_name: "Kraig Prohaska",
                card_number: "2221381107199906",
                total_amount: 415.96,
            },
            company_details: {
                legal_registration_no: "987654",
                email: "velzon@themesbrand.com",
                website: "www.themesbrand.com",
                contact_no: "0123456789",
                address: "California, United States",
                zip_code: "90201",
            },
            order_summary: {
                sub_total: 359.96,
                estimated_tex: 44.99,
                discount: 53.99,
                shipping_charge: 65,
                total_amount: 415.96,
            },
            notes: "All accounts are to be paid within 7 days from receipt of invoice. To be paid by cheque or credit card or direct payment online. If account is not paid within 7 days the credits details supplied as confirmation of work undertaken will be charged the agreed quoted fee noted above.",
        },
        {
            invoice_no: "25000368",
            customer: "Karen Monroe",
            img: "avatar-3.jpg",
            email: "ac.ipsum@google.com",
            date: new Date(2021, 3, d - 23, 21, 58),
            invoice_amount: 875,
            status: "Paid",
            billing_address: {
                full_name: "Karen Monroe",
                address: "486-3233 Quis Road Burnie Costa Rica 82926",
                phone: "(131) 702-8456",
                tax: "123456789",
            },
            shipping_address: {
                full_name: "Jescie Keller",
                address:
                    "256-3596 Fermentum Road Salzburg United States 86-910",
                phone: "(131) 702-8456",
                tax: "123456789",
            },
            prducts: [
                {
                    product_name: "Sweatshirt for Men (Pink)",
                    product_details: "Graphic Print Men & Women Sweatshirt",
                    rates: (rate = 119.99),
                    quantity: (qty = 2),
                    amount: rate * qty,
                },
                {
                    product_name: "Noise NoiseFit Endure Smart Watch",
                    product_details:
                        "32.5mm (1.28 Inch) TFT Color Touch Display",
                    rates: (rate = 94.99),
                    quantity: (qty = 1),
                    amount: rate * qty,
                },
                {
                    product_name: "350 ml Glass Grocery Container",
                    product_details:
                        "Glass Grocery Container (Pack of 3, White)",
                    rates: (rate = 24.99),
                    quantity: (qty = 1),
                    amount: rate * qty,
                },
            ],
            payment_details: {
                payment_method: "MasterCard",
                card_holder_name: "Domenic Kassulke",
                card_number: "5576137153087732",
                total_amount: 415.96,
            },
            company_details: {
                legal_registration_no: "987654",
                email: "velzon@themesbrand.com",
                website: "www.themesbrand.com",
                contact_no: "0123456789",
                address: "California, United States",
                zip_code: "90201",
            },
            order_summary: {
                sub_total: 359.96,
                estimated_tex: 44.99,
                discount: 53.99,
                shipping_charge: 65,
                total_amount: 415.96,
            },
            notes: "All accounts are to be paid within 7 days from receipt of invoice. To be paid by cheque or credit card or direct payment online. If account is not paid within 7 days the credits details supplied as confirmation of work undertaken will be charged the agreed quoted fee noted above.",
        },
        {
            invoice_no: "25000369",
            customer: "Vincent Weeks",
            img: "avatar-4.jpg",
            email: "metus.facilisis@hotmail.edu",
            date: new Date(2021, 3, d - 23, 21, 58),
            invoice_amount: 875,
            status: "Paid",
            billing_address: {
                full_name: "Vincent Weeks",
                address: "128-7206 Sit Street Bathurst Indonesia 812326",
                phone: "1-361-716-4822",
                tax: "123456789",
            },
            shipping_address: {
                full_name: "Jonah Hayden",
                address: "Ap #315-5686 Luctus. Rd. Samaniego Canada 482995",
                phone: "1-361-716-4822",
                tax: "123456789",
            },
            prducts: [
                {
                    product_name: "Sweatshirt for Men (Pink)",
                    product_details: "Graphic Print Men & Women Sweatshirt",
                    rates: (rate = 119.99),
                    quantity: (qty = 2),
                    amount: rate * qty,
                },
                {
                    product_name: "Noise NoiseFit Endure Smart Watch",
                    product_details:
                        "32.5mm (1.28 Inch) TFT Color Touch Display",
                    rates: (rate = 94.99),
                    quantity: (qty = 1),
                    amount: rate * qty,
                },
                {
                    product_name: "350 ml Glass Grocery Container",
                    product_details:
                        "Glass Grocery Container (Pack of 3, White)",
                    rates: (rate = 24.99),
                    quantity: (qty = 1),
                    amount: rate * qty,
                },
            ],
            payment_details: {
                payment_method: "MasterCard",
                card_holder_name: "Abner Muller",
                card_number: "5322044544430471",
                total_amount: 415.96,
            },
            company_details: {
                legal_registration_no: "987654",
                email: "velzon@themesbrand.com",
                website: "www.themesbrand.com",
                contact_no: "0123456789",
                address: "California, United States",
                zip_code: "90201",
            },
            order_summary: {
                sub_total: 359.96,
                estimated_tex: 44.99,
                discount: 53.99,
                shipping_charge: 65,
                total_amount: 415.96,
            },
            notes: "All accounts are to be paid within 7 days from receipt of invoice. To be paid by cheque or credit card or direct payment online. If account is not paid within 7 days the credits details supplied as confirmation of work undertaken will be charged the agreed quoted fee noted above.",
        },
        {
            invoice_no: "25000370",
            customer: "Miriam Dickson",
            img: "avatar-5.jpg",
            email: "nunc.ac@icloud.ca",
            date: new Date(2021, 3, d - 23, 21, 58),
            invoice_amount: 875,
            status: "Paid",
            billing_address: {
                full_name: "Miriam Dickson",
                address: "1747 Dui, Ave Springdale Russian Federation 67155",
                phone: "(215) 293-4168",
                tax: "123456789",
            },
            shipping_address: {
                full_name: "Eaton Buckley",
                address: "846-7108 Orci. Road Ukkel India 624087",
                phone: "(215) 293-4168",
                tax: "123456789",
            },
            prducts: [
                {
                    product_name: "Sweatshirt for Men (Pink)",
                    product_details: "Graphic Print Men & Women Sweatshirt",
                    rates: (rate = 119.99),
                    quantity: (qty = 2),
                    amount: rate * qty,
                },
                {
                    product_name: "Noise NoiseFit Endure Smart Watch",
                    product_details:
                        "32.5mm (1.28 Inch) TFT Color Touch Display",
                    rates: (rate = 94.99),
                    quantity: (qty = 1),
                    amount: rate * qty,
                },
                {
                    product_name: "350 ml Glass Grocery Container",
                    product_details:
                        "Glass Grocery Container (Pack of 3, White)",
                    rates: (rate = 24.99),
                    quantity: (qty = 1),
                    amount: rate * qty,
                },
            ],
            payment_details: {
                payment_method: "MasterCard",
                card_holder_name: "Elyse Green",
                card_number: "5393850427187200",
                total_amount: 415.96,
            },
            company_details: {
                legal_registration_no: "987654",
                email: "velzon@themesbrand.com",
                website: "www.themesbrand.com",
                contact_no: "0123456789",
                address: "California, United States",
                zip_code: "90201",
            },
            order_summary: {
                sub_total: 359.96,
                estimated_tex: 44.99,
                discount: 53.99,
                shipping_charge: 65,
                total_amount: 415.96,
            },
            notes: "All accounts are to be paid within 7 days from receipt of invoice. To be paid by cheque or credit card or direct payment online. If account is not paid within 7 days the credits details supplied as confirmation of work undertaken will be charged the agreed quoted fee noted above.",
        },
        {
            invoice_no: "25000371",
            customer: "Ashton Head",
            img: "",
            email: "cras@outlook.edu",
            date: new Date(2021, 3, d - 23, 21, 58),
            invoice_amount: 875,
            status: "Paid",
            billing_address: {
                full_name: "Ashton Head",
                address: "735-6864 Mauris Ave Linz South Korea 39964",
                phone: "(256) 774-0737",
                tax: "123456789",
            },
            shipping_address: {
                full_name: "Lani Ashley",
                address:
                    "P.O. Box 451, 696 Metus Avenue Jaboatão dos Guararapes Colombia 391846",
                phone: "(256) 774-0737",
                tax: "123456789",
            },
            prducts: [
                {
                    product_name: "Sweatshirt for Men (Pink)",
                    product_details: "Graphic Print Men & Women Sweatshirt",
                    rates: (rate = 119.99),
                    quantity: (qty = 2),
                    amount: rate * qty,
                },
                {
                    product_name: "Noise NoiseFit Endure Smart Watch",
                    product_details:
                        "32.5mm (1.28 Inch) TFT Color Touch Display",
                    rates: (rate = 94.99),
                    quantity: (qty = 1),
                    amount: rate * qty,
                },
                {
                    product_name: "350 ml Glass Grocery Container",
                    product_details:
                        "Glass Grocery Container (Pack of 3, White)",
                    rates: (rate = 24.99),
                    quantity: (qty = 1),
                    amount: rate * qty,
                },
            ],
            payment_details: {
                payment_method: "MasterCard",
                card_holder_name: "Wilhelmine Cummerata",
                card_number: "5529776760187837",
                total_amount: 415.96,
            },
            company_details: {
                legal_registration_no: "987654",
                email: "velzon@themesbrand.com",
                website: "www.themesbrand.com",
                contact_no: "0123456789",
                address: "California, United States",
                zip_code: "90201",
            },
            order_summary: {
                sub_total: 359.96,
                estimated_tex: 44.99,
                discount: 53.99,
                shipping_charge: 65,
                total_amount: 415.96,
            },
            notes: "All accounts are to be paid within 7 days from receipt of invoice. To be paid by cheque or credit card or direct payment online. If account is not paid within 7 days the credits details supplied as confirmation of work undertaken will be charged the agreed quoted fee noted above.",
        },
        {
            invoice_no: "25000371",
            customer: "Linus Martin",
            img: "avatar-2.jpg",
            email: "fringilla.est.mauris@google.edu",
            date: new Date(2021, 3, d - 23, 21, 58),
            invoice_amount: 875,
            status: "Paid",
            billing_address: {
                full_name: "Linus Martin",
                address: "907-233 Vehicula. Road Vietnam Vienna 8231",
                phone: "1-544-454-6888",
                tax: "123456789",
            },
            shipping_address: {
                full_name: "Yuri Allison",
                address: "Ap #769-2743 Pede. Road Gönen Spain 83472-82897",
                phone: "1-544-454-6888",
                tax: "123456789",
            },
            prducts: [
                {
                    product_name: "Sweatshirt for Men (Pink)",
                    product_details: "Graphic Print Men & Women Sweatshirt",
                    rates: (rate = 119.99),
                    quantity: (qty = 2),
                    amount: rate * qty,
                },
                {
                    product_name: "Noise NoiseFit Endure Smart Watch",
                    product_details:
                        "32.5mm (1.28 Inch) TFT Color Touch Display",
                    rates: (rate = 94.99),
                    quantity: (qty = 1),
                    amount: rate * qty,
                },
                {
                    product_name: "350 ml Glass Grocery Container",
                    product_details:
                        "Glass Grocery Container (Pack of 3, White)",
                    rates: (rate = 24.99),
                    quantity: (qty = 1),
                    amount: rate * qty,
                },
            ],
            payment_details: {
                payment_method: "MasterCard",
                card_holder_name: "Tania Price",
                card_number: "5336874146007028",
                total_amount: 415.96,
            },
            company_details: {
                legal_registration_no: "987654",
                email: "velzon@themesbrand.com",
                website: "www.themesbrand.com",
                contact_no: "0123456789",
                address: "California, United States",
                zip_code: "90201",
            },
            order_summary: {
                sub_total: 359.96,
                estimated_tex: 44.99,
                discount: 53.99,
                shipping_charge: 65,
                total_amount: 415.96,
            },
            notes: "All accounts are to be paid within 7 days from receipt of invoice. To be paid by cheque or credit card or direct payment online. If account is not paid within 7 days the credits details supplied as confirmation of work undertaken will be charged the agreed quoted fee noted above.",
        },
    ],
    checkAll =
        ((null === localStorage.getItem("invoices-list") &&
            null === localStorage.getItem("new_data_object")) ||
            (null === localStorage.getItem("invoices-list") &&
            null !== localStorage.getItem("new_data_object")
                ? ((invoice_new_obj = JSON.parse(
                      localStorage.getItem("new_data_object")
                  )),
                  Invoices.push(invoice_new_obj),
                  localStorage.removeItem("new_data_object"))
                : ((Invoices = []),
                  (Invoices = JSON.parse(
                      localStorage.getItem("invoices-list")
                  )),
                  null !== localStorage.getItem("new_data_object") &&
                      ((invoice_new_obj = JSON.parse(
                          localStorage.getItem("new_data_object")
                      )),
                      Invoices.push(invoice_new_obj),
                      localStorage.removeItem("new_data_object")),
                  localStorage.removeItem("invoices-list"))),
        Array.from(Invoices).forEach(function (e) {
            let t;
            switch (e.status) {
                case "Paid":
                    t = "success";
                    break;
                case "Refund":
                    t = "primary";
                    break;
                case "Unpaid":
                    t = "warning";
                    break;
                case "Cancel":
                    t = "danger";
            }
            a = e.img
                ? "<img src='assets/images/users/" +
                  e.img +
                  "' alt='' class='avatar-xs rounded-circle me-2'>"
                : '<div class="flex-shrink-0 avatar-xs me-2"><div class="avatar-title bg-soft-success text-success rounded-circle fs-13">' +
                  (2 <= (a = e.customer.split(" ")).length
                      ? a[0].slice(0, 1) + a[1].slice(0, 1)
                      : a[0].slice(0, 1)) +
                  "</div></div>";
            var a =
                `<tr>
                <th scope="row">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="chk_child" value="#VL${e.invoice_no}">
                    </div>
                </th>
                <td class="id"><a href="javascript:void(0);" onclick="ViewInvoice(this);" data-id="` +
                e.invoice_no +
                '" class="fw-medium link-primary">#VL' +
                e.invoice_no +
                `</a></td>
                <td class="customer_name">
                    <div class="d-flex align-items-center">
                        ` +
                a +
                e.customer +
                `
                    </div>
                </td>
                <td class="email">` +
                e.email +
                `</td>
                <td class="country">USA</td>
                <td class="date">` +
                str_dt(e.date) +
                ' <small class="text-muted">' +
                tConvert(e.date) +
                `</small></td>
                <td class="invoice_amount">$` +
                e.invoice_amount +
                `</td>
                <td class="status"><span class="badge badge-soft-` +
                t +
                ' text-uppercase">' +
                e.status +
                `</span>
                </td>
                <td>
                    <div class="dropdown">
                        <button class="btn btn-soft-secondary btn-sm dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="ri-more-fill align-middle"></i>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li><button class="dropdown-item" href="javascript:void(0);" onclick="ViewInvoice(this);" data-id="` +
                e.invoice_no +
                `" ><i class="ri-eye-fill align-bottom me-2 text-muted"></i>
                                    View</button></li>
                            <li><button class="dropdown-item" href="javascript:void(0);" onclick="EditInvoice(this);" data-id="` +
                e.invoice_no +
                `"><i class="ri-pencil-fill align-bottom me-2 text-muted"></i>
                                    Edit</button></li>
                            <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-download-2-line align-bottom me-2 text-muted"></i>
                                    Download</a></li>
                            <li class="dropdown-divider"></li>
                            <li>
                                <a class="dropdown-item remove-item-btn" data-bs-toggle="modal" href="#deleteOrder">
                                    <i class="ri-delete-bin-fill align-bottom me-2 text-muted"></i>
                                    Delete
                                </a>
                            </li>
                        </ul>
                    </div>
                </td>
            </tr>`;
            document.getElementById("invoice-list-data").innerHTML += a;
        }),
        document.addEventListener("DOMContentLoaded", function () {
            var e = document.querySelectorAll('[data-plugin="choices"]');
            Array.from(e).forEach(function (e) {
                new Choices(e, {
                    placeholderValue: "This is a placeholder set in the config",
                    searchPlaceholderValue: "Search results here",
                });
            });
        }),
        flatpickr("#datepicker-range", { mode: "range", dateFormat: "d M, Y" }),
        flatpickr("#date-field", { dateFormat: "d M, Y" }),
        document.getElementById("checkAll")),
    perPage =
        (checkAll &&
            (checkAll.onclick = function () {
                for (
                    var e = document.querySelectorAll(
                            '.form-check-all input[type="checkbox"]'
                        ),
                        t = document.querySelectorAll(
                            '.form-check-all input[type="checkbox"]:checked'
                        ).length,
                        a = 0;
                    a < e.length;
                    a++
                )
                    (e[a].checked = this.checked),
                        e[a].checked
                            ? e[a].closest("tr").classList.add("table-active")
                            : e[a]
                                  .closest("tr")
                                  .classList.remove("table-active");
                document.getElementById("remove-actions").style.display =
                    0 < t ? "none" : "block";
            }),
        8),
    options = {
        valueNames: [
            "id",
            "customer_name",
            "email",
            "country",
            "date",
            "invoice_amount",
            "status",
        ],
        page: perPage,
        pagination: !0,
        plugins: [ListPagination({ left: 2, right: 2 })],
    },
    invoiceList = new List("invoiceList", options).on("updated", function (e) {
        0 == e.matchingItems.length
            ? (document.getElementsByClassName("noresult")[0].style.display =
                  "block")
            : (document.getElementsByClassName("noresult")[0].style.display =
                  "none");
        var t = 1 == e.i,
            a = e.i > e.matchingItems.length - e.page;
        document.querySelector(".pagination-prev.disabled") &&
            document
                .querySelector(".pagination-prev.disabled")
                .classList.remove("disabled"),
            document.querySelector(".pagination-next.disabled") &&
                document
                    .querySelector(".pagination-next.disabled")
                    .classList.remove("disabled"),
            t &&
                document
                    .querySelector(".pagination-prev")
                    .classList.add("disabled"),
            a &&
                document
                    .querySelector(".pagination-next")
                    .classList.add("disabled"),
            e.matchingItems.length <= perPage
                ? (document.querySelector(".pagination-wrap").style.display =
                      "none")
                : (document.querySelector(".pagination-wrap").style.display =
                      "flex"),
            e.matchingItems.length == perPage &&
                document
                    .querySelector(".pagination.listjs-pagination")
                    .firstElementChild.children[0].click(),
            0 < e.matchingItems.length
                ? (document.getElementsByClassName(
                      "noresult"
                  )[0].style.display = "none")
                : (document.getElementsByClassName(
                      "noresult"
                  )[0].style.display = "block");
    }),
    isValue = (isCount = new DOMParser().parseFromString(
        invoiceList.items.slice(-1)[0]._values.id,
        "text/html"
    )).body.firstElementChild.innerHTML,
    idField = document.getElementById("orderId"),
    customerNameField = document.getElementById("customername-field"),
    emailField = document.getElementById("email-field"),
    dateField = document.getElementById("date-field"),
    countryField = document.getElementById("country-field"),
    statusField = document.getElementById("delivered-status"),
    addBtn = document.getElementById("add-btn"),
    editBtn = document.getElementById("edit-btn"),
    removeBtns = document.getElementsByClassName("remove-item-btn"),
    editBtns = document.getElementsByClassName("edit-item-btn");
function filterContact(e) {
    var t = e;
    invoiceList.filter(function (e) {
        e = (matchData = new DOMParser().parseFromString(
            e.values().status,
            "text/html"
        )).body.firstElementChild.innerHTML;
        return "All" == e || "All" == t || e == t;
    }),
        invoiceList.update();
}
function updateList() {
    var t = document.querySelector("input[name=status]:checked").value;
    (data = userList.filter(function (e) {
        return "All" == t || e.values().sts == t;
    })),
        userList.update();
}
refreshCallbacks(), filterContact("All");
var table = document.getElementById("invoiceTable"),
    tr = table.getElementsByTagName("tr"),
    trlist = table.querySelectorAll(".list tr");
function SearchData() {
    var i = document.getElementById("idStatus").value,
        o = document.getElementById("datepicker-range").value,
        r = o.split(" to ")[0],
        s = o.split(" to ")[1];
    invoiceList.filter(function (e) {
        var t = (matchData = new DOMParser().parseFromString(
                e.values().status,
                "text/html"
            )).body.firstElementChild.innerHTML,
            a = !1,
            n = !1,
            a = "all" == t || "all" == i || t == i,
            n =
                new Date(e.values().date.slice(0, 12)) >= new Date(r) &&
                new Date(e.values().date.slice(0, 12)) <= new Date(s);
        return (a && n) || (a && "" == o ? a : n && "" == o ? n : void 0);
    }),
        invoiceList.update();
}
function ischeckboxcheck() {
    Array.from(document.getElementsByName("chk_child")).forEach(function (a) {
        a.addEventListener("change", function (e) {
            1 == a.checked
                ? e.target.closest("tr").classList.add("table-active")
                : e.target.closest("tr").classList.remove("table-active");
            var t = document.querySelectorAll(
                '[name="chk_child"]:checked'
            ).length;
            e.target.closest("tr").classList.contains("table-active"),
                (document.getElementById("remove-actions").style.display =
                    0 < t ? "block" : "none");
        });
    });
}
function refreshCallbacks() {
    Array.from(removeBtns).forEach(function (e) {
        e.addEventListener("click", function (e) {
            e.target.closest("tr").children[1].innerText,
                (itemId = e.target.closest("tr").children[1].innerText);
            e = invoiceList.get({ id: itemId });
            Array.from(e).forEach(function (e) {
                var t = (deleteid = new DOMParser().parseFromString(
                    e._values.id,
                    "text/html"
                )).body.firstElementChild;
                deleteid.body.firstElementChild.innerHTML == itemId &&
                    document
                        .getElementById("delete-record")
                        .addEventListener("click", function () {
                            invoiceList.remove("id", t.outerHTML),
                                document
                                    .getElementById("deleteRecord-close")
                                    .click();
                        });
            });
        });
    });
}
function clearFields() {
    (customerNameField.value = ""),
        (emailField.value = ""),
        (dateField.value = ""),
        (countryField.value = "");
}
function ViewInvoice(e) {
    e = e.getAttribute("data-id");
    localStorage.setItem("invoices-list", JSON.stringify(Invoices)),
        localStorage.setItem("option", "view-invoice"),
        localStorage.setItem("invoice_no", e),
        window.location.assign("apps-invoices-details.html");
}
function EditInvoice(e) {
    e = e.getAttribute("data-id");
    localStorage.setItem("invoices-list", JSON.stringify(Invoices)),
        localStorage.setItem("option", "edit-invoice"),
        localStorage.setItem("invoice_no", e),
        window.location.assign("apps-invoices-create.html");
}
function deleteMultiple() {
    ids_array = [];
    var e = document.getElementsByName("chk_child");
    for (i = 0; i < e.length; i++)
        1 == e[i].checked && ids_array.push(e[i].value);
    "undefined" != typeof ids_array && 0 < ids_array.length
        ? Swal.fire({
              title: "Are you sure?",
              text: "You won't be able to revert this!",
              icon: "warning",
              showCancelButton: !0,
              confirmButtonClass: "btn btn-primary w-xs me-2 mt-2",
              cancelButtonClass: "btn btn-danger w-xs mt-2",
              confirmButtonText: "Yes, delete it!",
              buttonsStyling: !1,
              showCloseButton: !0,
          }).then(function (e) {
              if (e.value) {
                  for (i = 0; i < ids_array.length; i++)
                      invoiceList.remove(
                          "id",
                          '<a href="javascript:void(0);" onclick="ViewInvoice(this);" data-id="' +
                              ids_array[i].slice(3) +
                              `" class="fw-medium link-primary">${ids_array[i]}</a>`
                      );
                  (document.getElementById("remove-actions").style.display =
                      "none"),
                      (document.getElementById("checkAll").checked = !1),
                      Swal.fire({
                          title: "Deleted!",
                          text: "Your data has been deleted.",
                          icon: "success",
                          confirmButtonClass: "btn btn-info w-xs mt-2",
                          buttonsStyling: !1,
                      });
              }
          })
        : Swal.fire({
              title: "Please select at least one checkbox",
              confirmButtonClass: "btn btn-info",
              buttonsStyling: !1,
              showCloseButton: !0,
          });
}
document.querySelector("#invoiceList").addEventListener("click", function () {
    ischeckboxcheck();
}),
    document
        .querySelector(".pagination-next")
        .addEventListener("click", function () {
            document.querySelector(".pagination.listjs-pagination") &&
                document
                    .querySelector(".pagination.listjs-pagination")
                    .querySelector(".active") &&
                document
                    .querySelector(".pagination.listjs-pagination")
                    .querySelector(".active")
                    .nextElementSibling.children[0].click();
        }),
    document
        .querySelector(".pagination-prev")
        .addEventListener("click", function () {
            document.querySelector(".pagination.listjs-pagination") &&
                document
                    .querySelector(".pagination.listjs-pagination")
                    .querySelector(".active") &&
                document
                    .querySelector(".pagination.listjs-pagination")
                    .querySelector(".active")
                    .previousSibling.children[0].click();
        });
