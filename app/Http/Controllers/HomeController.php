<?php

namespace App\Http\Controllers;

use App\Partner;
use App\Ticket;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function getCurrentTicketByDate($date)
    {
        $presaleOneStartDate = date('Y-m-d', strtotime('2021-05-11'));
        $presaleOneEndDate = date('Y-m-d', strtotime('2021-05-17'));
        $presaleTwoStartDate = date('Y-m-d', strtotime('2021-05-18'));
        $presaleTwoEndDate = date('Y-m-d', strtotime('2021-05-22'));
        $presaleThreeStartDate = date('Y-m-d', strtotime('2021-05-23'));
        $presaleThreeEndDate = date('Y-m-d', strtotime('2021-06-01'));

        if (
            (date('Y-m-d', strtotime($date . " + 1 days")) >= $presaleOneStartDate) &&
            (date('Y-m-d', strtotime($date . " + 1 days")) <= $presaleOneEndDate)
        ) {
            return 'presale-1';
        } else if (
            (date('Y-m-d', strtotime($date . " + 1 days")) >= $presaleTwoStartDate) &&
            (date('Y-m-d', strtotime($date . " + 1 days")) <= $presaleTwoEndDate)
        ) {
            return 'presale-2';
        } else if (
            (date('Y-m-d', strtotime($date . " + 1 days")) >= $presaleThreeStartDate) &&
            (date('Y-m-d', strtotime($date . " + 1 days")) <= $presaleThreeEndDate)
        ) {
            return 'presale-3';
        } else {
            return null;
        }
    }
    
    public function determineTicketAvailability($startDate, $endDate) {
        $todayDate = date('Y-m-d');
        $todayDate= date('Y-m-d', strtotime($todayDate . " + 1 days"));

        if (($todayDate >= $startDate) && ($todayDate <= $endDate)){
            return true;
        } else {
            return false;
        }
    }
    
    public function index()
    {
        $presaleType = $this->getCurrentTicketByDate(date('Y-m-d'));
        $ticket = Ticket::where('type', $presaleType)->first();
        
        return view('home', [
            'ticket' => $ticket
        ]);
    }

    public function about()
    {
        return view('about');
    }

    public function partners()
    {
        $partners = Partner::with('socialMedia')->get();

        return view('partners', [
            'partners' => $partners
        ]);
    }

    public function faqs()
    {
        return view('faqs');
    }

    public function coreProfile($core)
    {
        $cores = [
            "muhammad-huda" => [
                "letterbox" => "https://letterboxd.com/muhmmdhuda/",
                "linkedin" => "https://linkedin.com/in/muhmmdhuda",
                "email" => "mailto:muhmmmdhuda@gmail.com",
                "url" => "organizer",
                "name" => "Muhammad Huda"
            ],
            "david-leonardo" => [
                "phone" => "https://api.whatsapp.com/send?phone=628118503007",
                "email" => "mailto:davidlnrdos@gmail.com",
                "linkedin" => "https://linkedin.com/in/davidlnrdo",
                "medium" => "https://davidlnrdo.medium.com/",
                "vsco" => "https://vsco.co/davidlnrdo/gallery",
                "url" => "co-organizer",
                "name" => "David Leonardo"
            ],
            "sheila-istiningtyas" => [
                "email" => "mailto:sheilaistiningtyas@gmail.com",
                "instagram" => "https://www.instagram.com/sheilai",
                "phone" => "https://api.whatsapp.com/send?phone=6281287374970",
                "linkedin" => "https://www.linkedin.com/in/sheila-istiningtyas-43a12516b/",
                "url" => "bm",
                "name" => "Sheila Istiningtyas Padmarini"
            ],
            "putri-nesya" => [
                "Instagram" => "https://www.instagram.com/putrinesya",
                "email" => "mailto:putrinesya12@gmail.com",
                "linkedin" => "https://www.linkedin.com/in/putri-nesya-wibowo-6a4923200/",
                "url" => "curator-1",
                "name" => "Putri Nesya Wibowo"
            ],
            "daffa-naradhipa" => [
                "Instagram" => "https://www.instagram.com/daffanaradhipa",
                "email" => "mailto:daffanrdhipa@gmail.com",
                "linkedin" => "https://www.linkedin.com/in/daffanrdhipa/",
                "url" => "curator-2",
                "name" => "Daffa Naradhipa"
            ],
            "dio-pratama" => [
                "instagram" => "https://www.instagram.com/dioaryapratamaa",
                "email" => "mailto:dioapratamaa@gmail.com",
                "phone" => "https://api.whatsap.com/send?phone=6282287066061",
                "linkedin" => "https://www.linkedin.com/in/dioaryapratama/",
                "url" => "sponsor-1",
                "name" => "Dio Arya Pratama"
            ],
            "andi-talitha" => [
                "Instagram" => "https://www.instagram.com/ghepearce",
                "Email" => "mailto:ghea.talitha16@gmail.com",
                "Linkedin" => "https://www.linkedin.com/in/anditalitha/",
                "url" => "sponsor-2",
                "name" => "Andi Talitha Ghassani Rizky"
            ],
            "afina-syahrani" => [
                "instagram" => "https://www.instagram.com/afinasyahrani",
                "email" => "mailto:afinashrn@gmail.com",
                "phone" => "https://api.whatsapp.com/send?phone=6281210003333",
                "linkedin" => "https://www.linkedin.com/in/afinasyahrani",
                "url" => "em-1",
                "name" => "Afina Syahrani Damiar"
            ],
            "dewangga-akbar" => [
                "email" => "mailto:dewanggakb@gmail.con",
                "instagram" => "https://www.instagram.com/dewanggawho",
                "linkedin" => "https://www.linkedin.com/in/dewanggakb",
                "url" => "em-2",
                "name" => "Dewangga Akbar Pangaji"
            ],
            "afif-royyanto" => [
                "instagram" => "https://www.instagram.com/afif_royy",
                "email" => "mailto:afifroy06@gmail.com",
                "phone" => "https://api.whatsapp.com/send?phone=6281295993900",
                "linkedin" => "https://www.linkedin.com/in/afifroyyanto",
                "url" => "ep-1",
                "name" => "Afif Royyanto"
            ],
            "destya-pramesti" => [
                "instagram" => "https://www.instagram.com/destyashafa",
                "email" => "mailto:shafadestya@gmail.com",
                "phone" => "https://api.whatsapp.com/send?phone=6287871245917",
                "linkedin" => "https://www.linkedin.com/in/destyashafa",
                "url" => "ep-2",
                "name" => "Destya Pramesti Shafa S"
            ],
            "tsabita-afifah" => [
                "instagram" => "https://www.instagram.com/tsabitafifah",
                "email" => "mailto:tsabitta@gmail.com",
                "phone" => "https://api.whatsapp.com/send?phone=6281314349341",
                "linkedin" => "http://linkedin.com/in/tsabita-afifah-khoirunnisa-1a06061b3",
                "url" => "cem",
                "name" => "Tsabita Afifah Khoirunnisa"
            ],
            "naufaldy-ghaly" => [
                "linkedin" => "https://www.linkedin.com/in/naufaldyghaly/",
                "behance" => "https://www.behance.net/naufaldyghaly",
                "url" => "design",
                "name" => "Naufaldy Ghaly Alana"
            ],
            "dimas-prasetya" => [
                "Phone" => "https://api.whatsapp.com/send?phone=6285156691069",
                "Email" => "mailto:dimasngehe.gv@gmail.com",
                "Instagram" => "https://www.instagram.com/dimasngehe",
                "LinkedIn" => "https://www.linkedin.com/dimasngehe",
                "Behance" => "https://wwww.behance.com/dimasngehe",
                "YouTube" => "https://www.youtube.com/channel/UCb6dLHP7EIJWQhH1U4d8vNg",
                "url" => "vp-1",
                "name" => "Dimas Prasetya Adi Herlambang"
            ],
            "mohammad-ikhsanudin" => [
                "Instagram" => "https://www.instagram.com/ikhsanicn",
                "Email" => "mailto:ikhsanrise@gmail.com",
                "Phone" => "https://api.whatsapp.com/send?phone=6289676415621",
                "Youtube" => "https://www.youtube.com/channel/UCnlyGJlG2eIINedSRvAM-IQ",
                "LinkedIn" => "https://www.linkedin.com/in/moh-ikhsanudin-1455081b9/",
                "url" => "vp-2",
                "name" => "Mohammad Ikhsanudin"
            ],
            "bram-adl" => [
                "github" => "https://github.com/bram-adl",
                "linkedin" => "https://www.linkedin.com/in/bram-adl",
                "instagram" => "https://instagram.com/bram.adl/",
                "website" => "https://bram-adl.github.io",
                "url" => "website",
                "name" => "Bram Adl"
            ],
        ];

        $coreDetailLength = count($cores[$core]);
        $coreDetail = array_slice($cores[$core], 0, $coreDetailLength - 2);
        
        return view('core-profile', [
            'name' => $cores[$core]['name'],
            'core' => $cores[$core],
            'detail' => $coreDetail
        ]);
    }
}
