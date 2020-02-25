const contentList = document.querySelector('#testdata');

//create element
function renderContent(doc){
    let li = document.createElement('li');
    let title = document.createElement('span');
    let content = document.createElement('span');

    li.setAttribute('data-id', doc.id);
    title.textContent = doc.data().title;
    content.textContent = doc.data().content;

    li.appendChild(title);
    li.appendChild(content);

    contentList.appendChild(li);

    document.getElementById("text1").innerHTML = doc.data().title
}

// get data

db.collection('guides').get().then((snapshot)=>{
    // console.log(snapshot.docs);
    snapshot.docs.forEach(doc => {
        // console.log(doc.data())
        renderContent(doc);
    })
})

//status change
auth.onAuthStateChanged(user =>{
    // console.log(user)
    if (user) {
        console.log('user logged in:', user)
        // window.location.replace("Home.php");
    } else {
        console.log('user logged out');
        // window.location.replace("Log_in.php");
    }
})

//Login
const loginForm = document.querySelector('#login-form');
loginForm.addEventListener('submit', (e) => {
    e.preventDefault();

    //get user info
    const email = loginForm['login-email'].value;
    const password = loginForm['login-password'].value;

    auth.signInWithEmailAndPassword(email, password).then(cred => {
        // console.log(cred.user)
    })
})

//logout
const logout = document.querySelector('#logout');
logout.addEventListener('click', (e) => {
    e.preventDefault();
    auth.signOut().then(() => {
        window.location.replace("Log_in.php");
    });
    // window.location.replace("Log_in.php");
});
