
  // Import the functions you need from the SDKs you need
  import { initializeApp } from "https://www.gstatic.com/firebasejs/9.6.9/firebase-app.js";
  import {
    getFirestore,
    collection,
    setDoc,
    doc,
    getDocs,
    getDoc,
    addDoc,
    query,limit,orderBy,where,
    onSnapshot
     } from "https://www.gstatic.com/firebasejs/9.6.9/firebase-firestore.js";
  import { getAnalytics } from "https://www.gstatic.com/firebasejs/9.6.9/firebase-analytics.js";
  // TODO: Add SDKs for Firebase products that you want to use
  // https://firebase.google.com/docs/web/setup#available-libraries

  // Your web app's Firebase configuration
  // For Firebase JS SDK v7.20.0 and later, measurementId is optional
  const firebaseConfig = {
    apiKey: "AIzaSyAH7wxJjbm2y-u9bSTs-LLIiuM9ZYsMEsY",
    authDomain: "camp-1d177.firebaseapp.com",
    projectId: "camp-1d177",
    storageBucket: "camp-1d177.appspot.com",
    messagingSenderId: "19673037520",
    appId: "1:19673037520:web:e99ed1f873af27ee12bcd5",
    measurementId: "G-975WSK3WZ8"
  };

  // Initialize Firebase
  const app = initializeApp(firebaseConfig);
  const analytics = getAnalytics(app);
  const firestore = getFirestore(app);


  const tbody = document.getElementById("tab");
 
  
  
  
 

  function AddItemToTableMonitoring( timestamp,firstName, lastName, contactNo,username,password){
    

  
    
    let trbody = document.createElement("tr");
    let td1 = document.createElement("td");
    let td2 = document.createElement("td");
    let td3 = document.createElement("td");
    let td4 = document.createElement("td");
    let td5 = document.createElement("td");
    let td6 = document.createElement("td");
 

    td1.innerHTML = timestamp;
    td2.innerHTML = firstName;
    td3.innerHTML = lastName;
    td4.innerHTML = contactNo;
    td5.innerHTML = username;
    td6.innerHTML = password;
    
  
    
    
  
    trbody.appendChild(td1);
    trbody.appendChild(td2);
    trbody.appendChild(td3);
    trbody.appendChild(td4);
    trbody.appendChild(td5);
    trbody.appendChild(td6);

    
    tbody.appendChild(trbody);
    
    
  }




  
  //Adding Firebase to Table Body
  function AddAllItemsToTableMonitoring(ReportInfo){
    tbody.innerHTML="";
   
    ReportInfo.forEach(element =>{
      AddItemToTableMonitoring( element.timestamp,element.firstName,element.lastName, element.contactNo,element.username,element.password);
    });
  }
  
  //Firestore DB get data once loading not realtime
    async function GetAllDataOnce(){
      const querySnapshot = await getDocs(collection(firestore, "CampSignUp"));
  
      var report = [];
  
      querySnapshot.forEach(doc =>{
        report.push(doc.data());
      });
        AddAllItemsToTableMonitoring(report);
  
    }
    //realtime update firestore DB
    async function GetAllDataRealtime(){
      const reportCol = collection(firestore, "CampSignUp");
      const statQuery = query(reportCol, orderBy("timestamp","desc"), limit(10));
      onSnapshot(statQuery, (snapshot) => {
        var report = [];
        snapshot.forEach((doc)=> {
          report.push(doc.data())
        });
         AddAllItemsToTableMonitoring(report);
      })
    }
  
  window.onload = GetAllDataRealtime;