function emailDiv(from, subject, message, time) {

    var emailsColumn = document.createElement("div");
    emailsColumn.className = "emails-column";

    var emailsRow = document.createElement("div");
    emailsRow.className = "emails-row";

    var emailsImage = document.createElement("div");
    emailsImage.className = "emails-image";

    var emailsContentColumn = document.createElement("div");
    emailsContentColumn.className = "emails-content-column";

    var emailsFrom = document.createElement("p");
    emailsFrom.className = "emails-from"
    emailsFrom.textContent = from;

    var emailsSubject = document.createElement("p");
    emailsSubject.className = "emails-subject";
    emailsSubject.textContent = subject;

    var emailsMessage = document.createElement("p");
    emailsMessage.className = "emails-message";
    emailsMessage.textContent = message;

    var emailsTailColumn = document.createElement("div");
    emailsTailColumn.className = "emails-tail-column";

    var emailsTime = document.createElement("p");
    emailsTime.className = "time";
    emailsTime.textContent = time;

    var materialSymbols = document.createElement("div");
    materialSymbols.className = "material-symbols";
    materialSymbols.setAttribute("style", "color: gray");
    materialSymbols.textContent = "star";

    // Montagem dos elementos
    emailsContentColumn.appendChild(emailsFrom);
    emailsContentColumn.appendChild(emailsSubject);
    emailsContentColumn.appendChild(emailsMessage);

    emailsTailColumn.appendChild(emailsTime);
    emailsTailColumn.appendChild(materialSymbols);

    emailsRow.appendChild(emailsImage);
    emailsRow.appendChild(emailsContentColumn);
    emailsRow.appendChild(emailsTailColumn);

    emailsColumn.appendChild(emailsRow);

    // Adicionar no HTML
    document.body.appendChild(emailsColumn);

    

}

emailDiv("Guilherme","Este é o título do e-mail:","Aqui é a mensagem que foi escrita","01:51");
emailDiv("Guilherme","Este é o título do e-mail:","Aqui é a mensagem que foi escrita","01:51");
emailDiv("Guilherme","Este é o título do e-mail:","Aqui é a mensagem que foi escrita","01:51");
emailDiv("Guilherme","Este é o título do e-mail:","Aqui é a mensagem que foi escrita","01:51");
emailDiv("Guilherme","Este é o título do e-mail:","Aqui é a mensagem que foi escrita","01:51");
emailDiv("Guilherme","Este é o título do e-mail:","Aqui é a mensagem que foi escrita","01:51");
emailDiv("Guilherme","Este é o título do e-mail:","Aqui é a mensagem que foi escrita","01:51");
emailDiv("Guilherme","Este é o título do e-mail:","Aqui é a mensagem que foi escrita","01:51");
emailDiv("Guilherme","Este é o título do e-mail:","Aqui é a mensagem que foi escrita","01:51");
emailDiv("Guilherme","Este é o título do e-mail:","Aqui é a mensagem que foi escrita","01:51");
emailDiv("Guilherme","Este é o título do e-mail:","Aqui é a mensagem que foi escrita","01:51");
emailDiv("Guilherme","Este é o título do e-mail:","Aqui é a mensagem que foi escrita","01:51");
emailDiv("Guilherme","Este é o título do e-mail:","Aqui é a mensagem que foi escrita","01:51");
emailDiv("Guilherme","Este é o título do e-mail:","Aqui é a mensagem que foi escrita","01:51");
emailDiv("Guilherme","Este é o título do e-mail:","Aqui é a mensagem que foi escrita","01:51");
emailDiv("Guilherme","Este é o título do e-mail:","Aqui é a mensagem que foi escrita","01:51");
emailDiv("Guilherme","Este é o título do e-mail:","Aqui é a mensagem que foi escrita","01:51");
emailDiv("Guilherme","Este é o título do e-mail:","Aqui é a mensagem que foi escrita","01:51");