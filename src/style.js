const button = document.getElementById('submit');

button.addEventListener('click',function(e) {
const name = document.getElementById('name').value;
const companyName = document.getElementById('companyName').value;
const email = document.getElementById('email').value;
const age = document.getElementById('age').value;
const message = document.getElementById('message').value;

console.log("名前:", name);
console.log("会社名:", companyName);
console.log("メアド:", email);
console.log("年齢:", age);
console.log("お問い合せ内容:", message);

if(name.trim() === "" || companyName.trim() === "" || email.trim() === "" || age.trim() === "" ||message.trim() === "") {
    alert("必須項目が未入力です。入力内容をご確認ください。");
    e.preventDefault();
    return;
}

const result = confirm(
    "以下の内容を本当に送信しますか？\n"+
    "名前: " + name + "\n"+
    "会社名: " + companyName + "\n"+
    "メールアドレス: " + email +"\n"+
    "年齢: " + age + "\n"+
    "お問い合せ内容: " + message +"\n"
);

if(!result) {
    e.preventDefault();
    return false;
}
});


const colorButton = document.getElementById('checkButton');
const footer = document.querySelector('footer');

console.log("colorButton:", colorButton);
console.log("footer:", footer);

const colors = ['blue', 'red', 'yellow', 'gray'];

let currentIndex = 0;

if (colorButton && footer) {
    colorButton.addEventListener('click',function() {

        footer.style.backgroundColor = colors[currentIndex];

        currentIndex = (currentIndex + 1)% colors.length;
    });
}
else {
    console.error("エラー: ボタンかフッターが見つかっていません！");
}

