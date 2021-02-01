var mem = {
hWrap : null,
hCards : null,
sets : 6,//number of cards to be matched.
hint : 1000,// time for mismatched cards to be shown.
url:"images/",//image location handle.
loaded : 0,//assets loaded.
moves : 0,//moves done
last : null,//last move data
grid : null,
matches : null,//the matched cards object.
locked : null,//2 cards chosen didn't match
preload : function()
{
  mem.hWrap = document.getElementById("mem-game");

  //preload images
  for(let i=0; i <= mem.sets; i++)
  {
        let img = document.createElement("img");
        img.onload = function () {
              mem.loaded++;
              if (mem.loaded == mem.sets+1) {mem.init();}

        };
        img.src  = mem.url+"mem-imag-"+i+".png";
  }
},

//Init game
init : function()
{
  if(mem.locked != null)
  {
        clearTimeout(mem.locked);
        mem.locked = null;
  }
  mem.hCards = [];
  mem.grid = [];
  mem.matches = [];
  mem.moves = 0;
  mem.last = null;
  mem.locked = null;
  mem.hWrap.innerHTML = "";
  let current = mem.sets * 2,temp,random;
  for(var i=1;i<=mem.sets;i++)
  {
        //pushing the both numbers into the stack implemetation.
        mem.grid.push(i);
        mem.grid.push(i);
  }
  while (0 !== current)
  {
        //calculating the random the
        random = Math.floor(Math.random() * current);
        current -= 1;
        //swapping the elements as per the random stack implementation.
        temp = mem.grid[current];
        mem.grid[current] = mem.grid[random];
        mem.grid[random] = temp;
  }

  //creating the html cards
  for(let i=0; i< mem.sets * 2; i++){
        let card = document.createElement("div");
        card.className = "mem-card";
        card.innerHTML = `<img src='${mem.url}mem-imag-0.png'/>`;
        card.dataset.idx = i;
        card.onclick = mem.open;
        mem.hWrap.appendChild(card);
        mem.hCards.push(card);
  }

},
open : function (){
  if(mem.locked == null)
  {
        mem.moves++;
        if (mem.moves%2==0) {
            var winn = document.getElementById("win-text");
            winn.textContent = mem.moves/2;
        }

        let idx = this.dataset.idx;
        this.innerHTML = `<img src='${mem.url}mem-imag-${mem.grid[idx]}.png'/>`;
        this.onclick = "";
        this.classList.add("open");

        if(mem.last == null){mem.last = idx;}
        else
        {
              if(mem.grid[idx] == mem.grid[mem.last])
              {
                    mem.matches.push(mem.last);
                    mem.matches.push(idx);
                    mem.hCards[mem.last].classList.remove("open");
                    mem.hCards[idx].classList.remove("open");
                    mem.hCards[mem.last].classList.add("right");
                    mem.hCards[idx].classList.add("right");
                    mem.last = null;
                    if(mem.matches.length == mem.sets * 2)
                    {
                          var winn = document.getElementById("win-text");
                          winn.textContent = mem.moves;
                          winn.appendChild(node);
                          node = document.getElementById("resetButton");
                          node.onclick = function ()
                          {
                                window.location.reload();
                                mem.init();
                          }

                    }

              }
              else{
                          mem.hCards[mem.last].classList.add("wrong");
                          mem.hCards[idx].classList.add("wrong");
                          mem.locked = setTimeout(function (){mem.close(idx,mem.last);},mem.hint);
                    }
        }
  }
},
close : function(aa,bb){
  aa = mem.hCards[aa];
  bb = mem.hCards[bb];
  aa.classList.remove("wrong");
  bb.classList.remove("wrong");
  aa.classList.remove("open");
  bb.classList.remove("open");
  aa.innerHTML = `<img src='${mem.url}mem-imag-0.png'/>`;
  bb.innerHTML = `<img src='${mem.url}mem-imag-0.png'/>`;
  aa.onclick = mem.open;
  bb.onclick = mem.open;
  mem.locked = null;
  mem.last = null;
}
};

//initialize the game.
window.addEventListener("DOMContentLoaded",mem.preload);
