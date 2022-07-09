fetch('https://webhook.site/6af0c236-cf5d-43e2-9b31-705f53aa0983?id=10', {
    method: 'DELETE',
  })
  .then(res => res.text()) // or res.json()
  .then(res => console.log(res))