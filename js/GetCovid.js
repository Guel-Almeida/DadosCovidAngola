window.onload = ()=>{
  
    const TotalPeople = 29572984
  
    GetCovid()


   

}


 function GetCovid (){
        
    var ValorActive = document.querySelector(".ValorActive")
      var ValorDeath = document.querySelector(".ValorDeath")
      var ValorRecovered = document.querySelector(".ValorRecovered")
      var dadosActivos = document.querySelector("#dadosActivos")
      var dadosPeople = document.querySelector("#dadosPeople")
      var dadosDeath = document.querySelector("#dadosDeath")
      var dadosRecovered = document.querySelector("#dadosRecovered")
  
            const url = 'https://covid19ao.com/api/general'
           fetch(url, {
          method: 'get',
          headers: {
              'Content-Type': 'application/json'
          },
      
      }).then((response) => response.json())
          .then((res) => {
              ValorActive.innerHTML= res.data.active
              ValorDeath.innerHTML = res.data.deaths
              ValorRecovered.innerHTML= res.data.recovered
              dadosActivos.innerHTML += ((Number(res.data.active)*100)/Number(TotalPeople)).toFixed(5)+" %"
              dadosPeople.innerHTML += TotalPeople
              dadosDeath.innerHTML += ((Number(res.data.deaths)*100)/Number(TotalPeople)).toFixed(5)+" %"
              dadosRecovered.innerHTML += ((Number(res.data.recovered)*100)/Number(TotalPeople)).toFixed(5)+" %"
              
          }).catch((error) => {
              console.error(error)
      });
      }