function triangle(num) {
    if (num >= 0) {
        for (let i = "#"; i.length <= num; i += "#") {
            // console.log(i.length);
            console.log(i);
        }
    } else {
        console.log("Paramemeter harus angka dan positif!");
    }
}

// triangle(1);
triangle(5);
// triangle("tiga");
// triangle(10);