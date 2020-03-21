function groupNumber(numb) {
    const newNumb = numb.replace(/[- ]/g, "");
    let res = '';
    for (i = 0; i < newNumb.length; i += 3) {
        let a = newNumb.slice(i, i + 3);
        res += `${a}-`;
    }
    if (newNumb.length % 3) {
        hasil = res.substring(0, res.length - 1);
        a = hasil.replace(/(\b-\b)(?!.*\1)/, "")
        b = a.substring(a.length - 2, a.length);
        c = `${a.substring(0, a.length-2)}-${b}`
        console.log(c);
    } else {
        hasil = res.substring(0, res.length - 1);
        console.log(hasil);
    }
}

groupNumber('993141 -1 1323 14-232');