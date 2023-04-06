import { SWRConfig } from 'swr'
import '../styles/globals.css'

function MyApp({ Component, pageProps }) {
  return (
    <SWRConfig value={{ fetcher: (url) => fetch(url).then((res) => res.json()) }}>
      <Component {...pageProps} />
    </SWRConfig>
  )
}

export default MyApp
