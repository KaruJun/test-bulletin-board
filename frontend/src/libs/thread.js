export const postThread = async (body) => {
  const res = await fetch(`${process.env.NEXT_PUBLIC_API_URL}/threads`, {
    method: 'POST',
    body: JSON.stringify(body),
    headers: {
      'Content-Type': 'application/json',
    },
  })
  return res
}