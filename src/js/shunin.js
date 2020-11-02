console.log("owo");

// get radio input
var radioVocabTypeEle_arr = document.getElementsByName("vocab-type");
radioVocabTypeEle_arr[0].addEventListener("change", radioHandler);
radioVocabTypeEle_arr[1].addEventListener("change", radioHandler);
radioVocabTypeEle_arr[2].addEventListener("change", radioHandler);

var verbTypeEle = document.getElementById("verb-type-group");
var adjTypeEle = document.getElementById("adj-type-group");
    
function radioHandler() {
    for (var i = 0; i < radioVocabTypeEle_arr.length; i++) {
        if (radioVocabTypeEle_arr[i].checked === true) {
            // selected radio

            if (radioVocabTypeEle_arr[i].value === "verb") {
                verbTypeEle.style.display = "block";
                adjTypeEle.style.display = "none";
            }
            else if (radioVocabTypeEle_arr[i].value === "adj") {
                verbTypeEle.style.display = "none";
                adjTypeEle.style.display = "block";
            }
        }
    }
}