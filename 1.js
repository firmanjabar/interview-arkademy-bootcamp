const biodata = [
  {
    name: "Firman Abdul Jabar",
    age: 22,
    address: "Jl. Tunas Baru, Komp. Graha Mega 2",
    hobbies: ["hiking", "playing game", "coding"],
    is_married: false,
    list_School: [
      {
        name: "TK Al-Quran",
        year_in: 2003,
        year_out: 2004,
        major: null
      },
      {
        name: "SDN Sukamanah",
        year_in: 2003,
        year_out: 2009,
        major: null
      },
      {
        name: "SMPN 1 Mande",
        year_in: 2009,
        year_out: 2012,
        major: null
      },
      {
        name: "MAN Cianjur",
        year_in: 2012,
        year_out: 2015,
        major: "Major Science"
      },
      {
        name: "Lambung Mangkurat University",
        year_in: 2015,
        year_out: null,
        major: "Computer Science Education Department"
      }
    ],
    skills: [
      {
        name: "HTML",
        level: "Advance"
      },
      {
        name: "CSS",
        level: "Advance"
      },
      {
        name: "JS",
        level: "Advance"
      },
      {
        name: "Design Graphic",
        level: "Beginer"
      }
    ],
    interest_in_coding: true
  },
  {
    name: "John Doe",
    age: 52,
    address: "Michigan",
    hobbies: ["cosplay", "soccer"],
    is_married: true,
    list_School: [
      {
        name: "Harvard University",
        year_in: 2015,
        year_out: 2020,
        major: "Management Business"
      }
    ],
    skills: [
      {
        name: "MS. Word",
        level: "Beginer"
      }
    ],
    interest_in_coding: true
  }
];

getBio = (name, age) => {
  biodata.forEach(bio => {
    const cekName = name.toLowerCase().replace(/ /g, "");
    const bioName = bio.name.toLowerCase().replace(/ /g, "");
    if (cekName === bioName && age === bio.age) {
      console.log(bio);
    }
  });
};

getBio(" F   irmaN A b D u L JAbar   ", 22);
