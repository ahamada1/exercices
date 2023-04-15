console.log('co')

const myPost = async () => {
    const response = await fetch("/iutRivesDeSeine/twitter/API.php/myposts", {
        headers: {
            'Content-Type': 'application/json'
        },
    })

    if (response.ok) {
        let responseData = await response.json()
        return responseData
    } else {
        throw response
    }
}

myPost().then(data => {
    console.log(data)
    for (let i = 0; i < data['posts'].length; i++) {
        console.log(data['posts'][i]["content"])
        document.querySelector('body').append(data['posts'][i]["content"])
    }
})



