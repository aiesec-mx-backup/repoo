$(document).ready(
        function () {
            $(".portfolio-link").click(function () {
                //alert($(this).attr('id'));
                valoresmodal($(this).attr('id'));
            });
        });
function valoresmodal(id) {
    switch (id) {
        case 'jimmer':
            //var num_cf = '4491833824';
            var num_cf = '-- :D --';
            var mail = "jimmer.alba@aiesec.net";
            $(".ui-conal-img").attr("src", "https://fbcdn-sphotos-f-a.akamaihd.net/hphotos-ak-xfp1/t31.0-8/s960x960/10321546_10203197991524339_2466813382599760933_o.jpg");
            $(".ui-conal-nombre").text("Jimmer Alba");
            $(".ui-conal-puesto").text("Congres Committee President");
            $(".ui-conal-LC").text("Aguascalientes");
            $(".ui-conal-correo-text").text(mail);
            $(".ui-conal-tel").text(num_cf);
            $(".ui-conal-correo").attr("href", "mailto:" + mail);
            break;
        case 'PatyM':
            var num_cf = '4491828051';
            var mail = "patricia.melchor@aiesec.net";
            $(".ui-conal-img").attr("src", "https://fbcdn-sphotos-c-a.akamaihd.net/hphotos-ak-xfp1/v/t1.0-9/10003912_640301972706804_262757807_n.jpg?oh=2be4d6be53d0d24f1a4aff75c36fc076&oe=5502671E&__gda__=1425853617_0420141cf0a7b014f435e63cc8b58508");
            $(".ui-conal-nombre").text("Patricia Melchor");
            $(".ui-conal-puesto").text("Finance Manager");
            $(".ui-conal-LC").text("Aguascalientes");
            $(".ui-conal-correo-text").text(mail);
            $(".ui-conal-tel").text(num_cf);
            $(".ui-conal-correo").attr("href", "mailto:" + mail);
            break;
        case 'IreryM':
            var num_cf = '4491443355';
            var mail = "irery.melchor@aiesec.net";
            $(".ui-conal-img").attr("src", "https://fbcdn-sphotos-a-a.akamaihd.net/hphotos-ak-xaf1/v/t1.0-9/1911897_10204113370212826_8478991522493641510_n.jpg?oh=0e12c5114e2669aaa203009110077b77&oe=55128392&__gda__=1427020069_3dc0d42856e138265058700343692701");
            $(".ui-conal-nombre").text("Irery Melchor");
            $(".ui-conal-puesto").text("Delegate Servicing Manager");
            $(".ui-conal-LC").text("Aguascalientes");
            $(".ui-conal-correo-text").text(mail);
            $(".ui-conal-tel").text(num_cf);
            $(".ui-conal-correo").attr("href", "mailto:" + mail);
            break;
        case 'FerC':
            var num_cf = '---';
            var mail = "---";
            $(".ui-conal-img").attr("src", "http://conal.aiesec.org.mx/teamconal/CC/FerC.jpg");
            $(".ui-conal-nombre").text("Fer Cortés");
            $(".ui-conal-puesto").text("Logistics Manager");
            $(".ui-conal-LC").text("---");
            $(".ui-conal-correo-text").text(mail);
            $(".ui-conal-tel").text(num_cf);
            $(".ui-conal-correo").attr("href", "mailto:" + mail);
            break;
        case 'JoaquinA':
            var num_cf = '4423158419';
            var mail = "joaquin.aguilar@aiesec.net";
            $(".ui-conal-img").attr("src", "https://fbcdn-sphotos-d-a.akamaihd.net/hphotos-ak-xpf1/v/t1.0-9/1798720_10154918534205521_540722966714815749_n.jpg?oh=4cafc8a7479486984b75a3ea40725290&oe=54F93899&__gda__=1426571507_19d5aabf9cda63c18c8d21313a721591");
            $(".ui-conal-nombre").text("Joaquín Aguilar");
            $(".ui-conal-puesto").text("Delegate Servicing - Staff");
            $(".ui-conal-LC").text("Queretaro");
            $(".ui-conal-correo-text").text(mail);
            $(".ui-conal-tel").text(num_cf);
            $(".ui-conal-correo").attr("href", "mailto:" + mail);
            break;
        case 'RosaJ':
            var num_cf = '4929050135';
            var mail = "aurora.jaime@aiesec.net";
            $(".ui-conal-img").attr("src", "https://fbcdn-sphotos-a-a.akamaihd.net/hphotos-ak-xaf1/v/t1.0-9/10410395_10205304763003429_6334231391574403479_n.jpg?oh=ebc470b686d6aea520f05e105d3f73bd&oe=55403A78&__gda__=1425676492_972ec23fb24a19617966a798540fd5eb");
            $(".ui-conal-nombre").text("Rosa Jayme");
            $(".ui-conal-puesto").text("Delegate Servicing - Staff");
            $(".ui-conal-LC").text("Zacatecas");
            $(".ui-conal-correo-text").text(mail);
            $(".ui-conal-tel").text(num_cf);
            $(".ui-conal-correo").attr("href", "mailto:" + mail);
            break;
        case 6:
            day = "Saturday";
            break;
        case 'Vanessa':
            var num_cf = '4491077508';
            var mail = "---";
            $(".ui-conal-img").attr("src", "https://scontent-b-atl.xx.fbcdn.net/hphotos-xpa1/t31.0-8/s960x960/1064440_647322488614181_1832357320_o.jpg");
            $(".ui-conal-nombre").text("Vanessa Dávila Nuñez");
            $(".ui-conal-puesto").text("Finance - Temster");
            $(".ui-conal-LC").text("Aguascalientes");
            $(".ui-conal-correo-text").text(mail);
            $(".ui-conal-tel").text(num_cf);
            $(".ui-conal-correo").attr("href", "mailto:" + mail);
            break;
        case 'PebeD':
            var num_cf = '4499903975';
            var mail = "pebe.dominguez@aiesec.net";
            $(".ui-conal-img").attr("src", "https://fbcdn-sphotos-c-a.akamaihd.net/hphotos-ak-xpf1/v/t1.0-9/10176175_10152058155733091_393067125785341518_n.jpg?oh=10abcbc56469e7fc9e7cb76306a01349&oe=550F0486&__gda__=1430721977_ace0855beca8351173b4634d56978afc");
            $(".ui-conal-nombre").text("Pebe Domínguez");
            $(".ui-conal-puesto").text("IT & Design - Teamster");
            $(".ui-conal-LC").text("Aguascalientes");
            $(".ui-conal-correo-text").text(mail);
            $(".ui-conal-tel").text(num_cf);
            $(".ui-conal-correo").attr("href", "mailto:" + mail);
            break;
        case 'RaulA':
            var num_cf = '4492805566';
            var mail = "raul.armendariz@aiesec.net";
            $(".ui-conal-img").attr("src", "https://fbcdn-sphotos-g-a.akamaihd.net/hphotos-ak-xap1/v/t1.0-9/1509190_10202850957212021_870409657_n.jpg?oh=90feceff94db96fb322151ba84d0d4cc&oe=5508627D&__gda__=1430245157_fce888e461d13769cfee021a3c79b929");
            $(".ui-conal-nombre").text("Raul Armendáriz");
            $(".ui-conal-puesto").text("IT & Design - Teamster");
            $(".ui-conal-LC").text("Aguascalientes");
            $(".ui-conal-correo-text").text(mail);
            $(".ui-conal-tel").text(num_cf);
            $(".ui-conal-correo").attr("href", "mailto:" + mail);
            break;
        case 'CharlieR':
            var num_cf = '4491267657';
            var mail = "alberto.ramirez@aiesec.net";
            $(".ui-conal-img").attr("src", "https://fbcdn-sphotos-h-a.akamaihd.net/hphotos-ak-xap1/v/t1.0-9/10685526_855561197812034_3309114995523338740_n.jpg?oh=804bd2c3e0c98963f3bc87795e8745e2&oe=54F9AD1A&__gda__=1430762694_c5eeeba574996ba6ce08b2b2a8213b56");
            $(".ui-conal-nombre").text("Charlie Ramírez");
            $(".ui-conal-puesto").text("IT & Design - Teamster");
            $(".ui-conal-LC").text("Aguascalientes");
            $(".ui-conal-correo-text").text(mail);
            $(".ui-conal-tel").text(num_cf);
            $(".ui-conal-correo").attr("href", "mailto:" + mail);
            break;
        case 'AlejandraN':
            var num_cf = '8186929695';
            var mail = "alenunez_91@hotmail.com";
            $(".ui-conal-img").attr("src", "https://fbcdn-sphotos-f-a.akamaihd.net/hphotos-ak-xap1/v/t1.0-9/182981_10154420873870297_1696678864006226329_n.jpg?oh=23ea1983afdd3f20bdba639aa22935ed&oe=551080A1&__gda__=1425723005_2a69ae30355b2efc5bd9d4846ccb1845");
            $(".ui-conal-nombre").text("Alejandra Nuñez");
            $(".ui-conal-puesto").text("Sessions - Team");
            $(".ui-conal-LC").text("Santa Fe");
            $(".ui-conal-correo-text").text(mail);
            $(".ui-conal-tel").text(num_cf);
            $(".ui-conal-correo").attr("href", "mailto:" + mail);
            break;
        case 'AlexS':
            $(".ui-conal-nombre").text("Alex Santcruz");
            $(".ui-conal-puesto").text("Sessions - Team");
            var num_cf = '6622811933';
            $(".ui-conal-LC").text("Hermosillo");
            var mail = "alex.santacruz@aiesec.net";
            $(".ui-conal-img").attr("src", "https://fbcdn-sphotos-f-a.akamaihd.net/hphotos-ak-xap1/v/t1.0-9/1460988_10152122543314724_1957699284_n.jpg?oh=d9afa6fc05af19ea30fabaa179186d37&oe=553D9C7F&__gda__=1426634149_6fd34ad9584d57fe1945b2bc18628fa9");
            $(".ui-conal-correo-text").text(mail);
            $(".ui-conal-tel").text(num_cf);
            $(".ui-conal-correo").attr("href", "mailto:" + mail);
            break;
        case 'AntonioR':
            $(".ui-conal-nombre").text("Antonio Rico");
            $(".ui-conal-puesto").text("Sessions - Team");
            var num_cf = '8110318130';
            $(".ui-conal-LC").text("Monterrey");
            var mail = "antonio.rico@aiesec.net";
            $(".ui-conal-img").attr("src", "https://scontent-b-ord.xx.fbcdn.net/hphotos-xap1/v/t1.0-9/1656379_10152218108906206_268038838_n.jpg?oh=47d68280515a5bbbf8eb431d7e5d9c32&oe=54FB0B5B");
            $(".ui-conal-correo-text").text(mail);
            $(".ui-conal-tel").text(num_cf);
            $(".ui-conal-correo").attr("href", "mailto:" + mail);
            break;
        case 'AriannaC':
            $(".ui-conal-nombre").text("Arianna Campos");
            $(".ui-conal-puesto").text("Sessions - Team");
            var num_cf = '5548665634';
            $(".ui-conal-LC").text("ITESM Monterrey");
            var mail = "arianna.campos@aiesec.net";
            $(".ui-conal-img").attr("src", "http://conal.aiesec.org.mx/teamconal/CC/ArianaC.jpg");
            $(".ui-conal-correo-text").text(mail);
            $(".ui-conal-tel").text(num_cf);
            $(".ui-conal-correo").attr("href", "mailto:" + mail);
            break;
        case 'LuisL':
            $(".ui-conal-nombre").text("Luis Letayf");
            $(".ui-conal-puesto").text("Sessions - Team");
            var num_cf = '5559670642';
            $(".ui-conal-LC").text("Santa Fe");
            var mail = "lletayf@hotmail.com";
            $(".ui-conal-img").attr("src", "https://fbcdn-sphotos-e-a.akamaihd.net/hphotos-ak-xap1/v/t1.0-9/1780810_10203240685243236_231741455_n.jpg?oh=c261db163be82ae14f9606111dfc0394&oe=550B8B1C&__gda__=1426413380_6f4adf2be9340c748a9f9e910a5c7c66");
            $(".ui-conal-correo-text").text(mail);
            $(".ui-conal-tel").text(num_cf);
            $(".ui-conal-correo").attr("href", "mailto:" + mail);
            break;
        case 'MariaD':
            $(".ui-conal-nombre").text("Maria de Mucha");
            $(".ui-conal-puesto").text("Sessions - Team");
            var num_cf = '---';
            $(".ui-conal-LC").text("---");
            var mail = "---";
            $(".ui-conal-img").attr("src", "https://fbcdn-sphotos-e-a.akamaihd.net/hphotos-ak-xpa1/v/t1.0-9/10258218_10152193804123311_1742549162514555491_n.jpg?oh=1549f4e6e3b99fe680e9ca11cdb26cf4&oe=5504004D&__gda__=1429789787_2f5d97242135ea2267913647f8c80dad");
            $(".ui-conal-correo-text").text(mail);
            $(".ui-conal-tel").text(num_cf);
            $(".ui-conal-correo").attr("href", "mailto:" + mail);
            break;
        case 'MarijoR':
            $(".ui-conal-nombre").text("Marijo Ramonet");
            $(".ui-conal-puesto").text("Sessions - Team");
            var num_cf = '4921447537';
            $(".ui-conal-LC").text("Zacatecas");
            var mail = "majo.ramonet@aiesec.net";
            $(".ui-conal-img").attr("src", "http://conal.aiesec.org.mx/teamconal/CC/MarijoR.JPG");
            $(".ui-conal-correo-text").text(mail);
            $(".ui-conal-tel").text(num_cf);
            $(".ui-conal-correo").attr("href", "mailto:" + mail);
            break;
        case 'OscarC':
            $(".ui-conal-nombre").text("Oscar Consuelo");
            $(".ui-conal-puesto").text("Sessions - Team");
            var num_cf = '55 1927 9526';
            $(".ui-conal-LC").text("Estado de México");
            var mail = "oscar.consuelo@aiesec.net";
            $(".ui-conal-img").attr("src", "https://fbcdn-sphotos-a-a.akamaihd.net/hphotos-ak-frc3/v/t1.0-9/1453521_717738984921685_1343432524_n.jpg?oh=df079a7f1be54dcf17203fb13ea9b991&oe=55034CE1&__gda__=1430294430_193191d561fd32803c10d653cf7ecda2");
            $(".ui-conal-correo-text").text(mail);
            $(".ui-conal-tel").text(num_cf);
            $(".ui-conal-correo").attr("href", "mailto:" + mail);
            break;
        case 'Jaz':
            $(".ui-conal-nombre").text("Jazmin Mendez");
            $(".ui-conal-puesto").text("Sessions - Team");
            var num_cf = '3221398752';
            $(".ui-conal-LC").text("Guanajuato");
            var mail = "jazmin.mendez@aiesec.net";
            $(".ui-conal-img").attr("src", "https://scontent-b-ord.xx.fbcdn.net/hphotos-xpa1/v/t1.0-9/10414470_10152553641292179_5624974138079777779_n.jpg?oh=f25f49a60ee4e986ace3360dd975dd80&oe=554754F1");
            $(".ui-conal-correo-text").text(mail);
            $(".ui-conal-tel").text(num_cf);
            $(".ui-conal-correo").attr("href", "mailto:" + mail);
            break;
        case 'AnaC':
            $(".ui-conal-nombre").text("Ana Cris Huerta");
            $(".ui-conal-puesto").text("Sessions - Manager");
            var num_cf = '4776764973';
            $(".ui-conal-LC").text("León");
            var mail = "Ana.huerta@aiesec.net";
            $(".ui-conal-img").attr("src", "https://scontent-b-ord.xx.fbcdn.net/hphotos-xpf1/t31.0-8/s960x960/10603874_713068132111063_6559952720424164982_o.jpg");
            $(".ui-conal-correo-text").text(mail);
            $(".ui-conal-tel").text(num_cf);
            $(".ui-conal-correo").attr("href", "mailto:" + mail);
            break;
        case 'JorgeH':
            $(".ui-conal-nombre").text("Jorge Herrera");
            $(".ui-conal-puesto").text("B&B - Team");
            var num_cf = '5539961228';
            $(".ui-conal-LC").text("Santa Fe");
            var mail = "jorg.herrerav@gmail.com";
            $(".ui-conal-img").attr("src", "https://scontent-a-ord.xx.fbcdn.net/hphotos-xap1/v/t1.0-9/1800329_10203630096861017_8088215182205503467_n.jpg?oh=db17affc62923e7889a7f0d0946c282c&oe=54FC2D5D");
            $(".ui-conal-correo-text").text(mail);
            $(".ui-conal-tel").text(num_cf);
            $(".ui-conal-correo").attr("href", "mailto:" + mail);
            break;
        case 'LorenaE':
            $(".ui-conal-nombre").text("Lorena Espinoza");
            $(".ui-conal-puesto").text("B&B - Team");
            var num_cf = '5535116695';
            $(".ui-conal-LC").text("Santa Fe");
            var mail = "lorena_espinosa@aiesec.net.mx";
            $(".ui-conal-img").attr("src", "http://conal.aiesec.org.mx/teamconal/CC/LorenaE.jpg");
            $(".ui-conal-correo-text").text(mail);
            $(".ui-conal-tel").text(num_cf);
            $(".ui-conal-correo").attr("href", "mailto:" + mail);
            break;
        case 'JoseG':
            $(".ui-conal-nombre").text("José Garrido");
            $(".ui-conal-puesto").text("B&B Manager");
            var num_cf = '5519521584';
            $(".ui-conal-LC").text("La Salle");
            var mail = "jose.elegarridoo@aiesec.net";
            $(".ui-conal-img").attr("src", "https://fbcdn-sphotos-e-a.akamaihd.net/hphotos-ak-xaf1/v/t1.0-9/10369903_10153073497614046_3893770037969470786_n.jpg?oh=36cf63843b0da1e68f2e989dbb0ee454&oe=5514592C&__gda__=1427266456_cc8e19078345a15ba82c9f3aefcc2022");
            $(".ui-conal-correo-text").text(mail);
            $(".ui-conal-tel").text(num_cf);
            $(".ui-conal-correo").attr("href", "mailto:" + mail);
            break;
        case 'SabinoH':
            $(".ui-conal-nombre").text("Sabino Hernández");
            $(".ui-conal-puesto").text("Showcase Manager");
            var num_cf = '2222991486';
            $(".ui-conal-LC").text("Puebla");
            var mail = "sabino.hernandez@aiesec.net";
            $(".ui-conal-img").attr("src", "https://fbcdn-sphotos-e-a.akamaihd.net/hphotos-ak-xap1/v/t1.0-9/10325254_10152048910407117_3897352469846422627_n.jpg?oh=3496694d479e9f773416cb26189aad0f&oe=5540A8D6&__gda__=1430422659_ab211db9c078ec16ea84957e8a262ac1");
            $(".ui-conal-correo-text").text(mail);
            $(".ui-conal-tel").text(num_cf);
            $(".ui-conal-correo").attr("href", "mailto:" + mail);
            break;
        case 'RebeL':
            $(".ui-conal-nombre").text("Rebe Lozano");
            $(".ui-conal-puesto").text("Social Agenda Manager");
            var num_cf = '4492174824';
            $(".ui-conal-LC").text("Aguascalientes");
            var mail = "rebe.loz018@gmail.com";
            $(".ui-conal-img").attr("src", "https://fbcdn-sphotos-e-a.akamaihd.net/hphotos-ak-xap1/v/t1.0-9/1011425_10151899856137339_163932472_n.jpg?oh=404e48931c154bce30543f6d813f1c8d&oe=54FD5BAE&__gda__=1426704886_5b251cd2f67e4087e51842caa52abfc4");
            $(".ui-conal-correo-text").text(mail);
            $(".ui-conal-tel").text(num_cf);
            $(".ui-conal-correo").attr("href", "mailto:" + mail);
            break;
        case 'ClaudiaL':
            $(".ui-conal-nombre").text("Claudia López");
            $(".ui-conal-puesto").text("Y2B Manager");
            var num_cf = '5517028429';
            $(".ui-conal-LC").text("UP");
            var mail = "clau.lopez@aiesec.net";
            $(".ui-conal-img").attr("src", "https://scontent-a-ord.xx.fbcdn.net/hphotos-xpa1/v/t1.0-9/1506912_10152455703715785_820020963622900346_n.jpg?oh=61d62b969094de3b90cb4101fd27dc7d&oe=54FD5EC0");
            $(".ui-conal-correo-text").text(mail);
            $(".ui-conal-tel").text(num_cf);
            $(".ui-conal-correo").attr("href", "mailto:" + mail);
            break;
    }
    $('#portfolioModal1').modal('show');
}
