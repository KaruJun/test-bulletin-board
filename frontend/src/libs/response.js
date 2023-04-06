export const postResponse = async (body, threadId) => {
  const res = await fetch(`${process.env.NEXT_PUBLIC_API_URL}/threads/${threadId}/responses`, {
    method: 'POST',
    body: JSON.stringify(body),
    headers: {
      'Content-Type': 'application/json',
    },
  })
  return res
}