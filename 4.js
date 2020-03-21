function longest(sentences) {
    let numb = 0;
    let str;
    const arr = sentences.split(" ");
    for (i = 0; i < arr.length; i++) {
        let ignoreSymbols = arr[i].replace(/[-!$%^&*()_+|~=`{}\[\]:";'<>?,.\/]/, "");
        if (numb < ignoreSymbols.length) {
            numb = ignoreSymbols.length
            str = ignoreSymbols;
        }
    }
    console.log(str);
}

longest("Halo Arkademian!");
// longest("Seluruh Arkademian mengucapkan selamat Ramadhan!");
// longest("Baju ini sangat bagus sekali!");