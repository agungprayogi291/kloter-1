<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <script>

        let y = 2;
for(let n = 0; n <= y ;n++){
    for(let i = 0;i < 3 ; i++){
            let str=" ";
            for(let j = 3 ; j > i; j--){
                str += " ";
            }
            for(let k =0; k <= i; k++){

                str+="*"
            }
            for(let l = 1; l <= i; l++){
                str+="*"

               
            }

            console.log(str)
          
        }

        for(let i = 3;i >0 ; i--){
            let str=" ";
            for(let j = i ; j < 3; j++){
                str += " ";
            }
            for(let k =0; k <= i; k++){

                str+="*"
            }
            for(let l = 1; l <= i; l++){
                
                    str += "*";        
            }
            console.log(str)
        }

}
        
        

        

    </script>
</body>
</html>