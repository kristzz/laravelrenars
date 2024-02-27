Teorija (Laravel README.md failā):

    • Kas ir API? 
    Veids kā serveris sazinas ar klientu

    • Kā deklarēt mainīgo PHP valodā? 
    $nosaukums

    • Kādu arhitektūru izmanto Laravel, paskaidro kā tā strādā: 
    Laravel izmanto MVC (model, view, controller) arhitektūru, klients veic pieprasījumu, controlleris saņem pieprasījumu, izmanto modeli lai iegūtu vajadzīgo un atgriež vajadzīgo 

    • Kas ir ORM, kāpēc to izmanto tīra SQL vietā? 
    Object relational mapping ļauj izstrādātājiem darboties ar datubāzi izmantojot OOP principus un nerakstot sql pieprasījumus

    • Uzraksti Eloquent ORM pieprasījumu modelim User, kur nepieciešams iegūt visus lietotājus kuriem reitings ir lielāks par 4. Lietotāju tabulas struktūra:
    User::where('rating', '>', 4)->get();

Praktika:
	Izveido Laravel projektu ar modeli un migrāciju priekš kursiem. Kurss sastāvēs no - nosaukuma, paskaidrojošā teksta, banera adreses un kursa cilvēku skaita. Ir jābūt divām API adresēm (galapunktiem): 
    1. Store - pievieno jaunu kursu datu bāzē + ienākošo datu validācija,
    2. Index - atgriež visus kursus.

Kad esi pabeidzis:
	Izveido publisku github repozitoriju, uz kura uzliec visu savu Laravel projektu ar README.md failu. Aizpildi Google form: https://forms.gle/BnBnDQ1czLxqrZ6eA
