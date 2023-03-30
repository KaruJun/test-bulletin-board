import Head from 'next/head'

const Layout = ({ children, title, bg = 'bg-orange-900 bg-opacity-50' }) => {
  return (
    <>
      <Head>
        <title>{title}</title>
      </Head>
      <div className={`min-h-screen ${bg}`}>
        <header>
          <h1 className="pt-6 text-4xl font-bold text-center">掲示板</h1>
        </header>
        <main className="container mx-auto p-4">{children}</main>
      </div>
    </>
  )
}

export default Layout