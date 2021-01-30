const Params1 = "a";
const Params2 = "saya mau makan sate bersama teman saya setelah lulus dari sekolah dasar";


function hitungJumlahHuruf(parms1,params2){
    
    let result = params2.split(`${parms1}`);
   return  result.length -1
}
console.log("hasil hitung huruf a muncul sebanyak "+hitungJumlahHuruf(Params1,Params2) )