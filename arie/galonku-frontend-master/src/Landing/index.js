import React from 'react'
import { Link } from 'react-router-dom'
import { Button, Header } from 'semantic-ui-react'
import Typing from 'react-typing-animation'

import './index.css'

import { getLocalstorage } from '../function/Localstorage'

const Landing = () => {
  const account = getLocalstorage('Account') || {}
  let view = ''
  if (account.role === 'merchants') {
    view = (
      <div className='landing'>
        <div className='blue-background'>
          <Header as='h1'>
            <div className='tagline'>
              <Typing speed={45}>
                <span>Pesan dan Jual Galon Lebih Mudah</span>
                <Typing.Backspace count={32} delay={2000} />
                <span>Beli Galon tanpa <u>Tunggu lama</u></span>
                <Typing.Backspace count={11} delay={2000} />
                <span><u>Capek Angkat Galon</u></span>
                <Typing.Backspace count={38} delay={4000} />
                <span>Jualan Galon dapat Customer <u>Lebih Banyak</u></span>
                <Typing.Backspace count={51} delay={2000} />
                <span>Ayo <u>Mulai Coba Galonku</u> Sekarang</span>
                <Typing.Reset count={3} delay={5000000} />
              </Typing>
            </div>
          </Header>

          <div className='button-landing'>
            <div className="button-divider">
              <Link to="/merchants/open" className="nav-link">
                <Button className='the-button' inverted size='big'>Mulai Jual</Button>
              </Link>
            </div>
          </div>
        </div>
      </div >
    )
  } else if (account.role === 'users') {
    view = (
      <div className='landing'>
        <div className='blue-background'>
          <Header as='h1'>
            <div className='tagline'>
              <Typing speed={45}>
                <span>Pesan dan Jual Galon Lebih Mudah</span>
                <Typing.Backspace count={32} delay={2000} />
                <span>Beli Galon tanpa <u>Tunggu lama</u></span>
                <Typing.Backspace count={11} delay={2000} />
                <span><u>Capek Angkat Galon</u></span>
                <Typing.Backspace count={38} delay={4000} />
                <span>Jualan Galon dapat Customer <u>Lebih Banyak</u></span>
                <Typing.Backspace count={51} delay={2000} />
                <span>Ayo <u>Mulai Coba Galonku</u> Sekarang</span>
                <Typing.Reset count={3} delay={5000000} />
              </Typing>
            </div>
          </Header>

          <div className="button-divider">
            <Link to="/users/transaction" className="nav-link">
              <Button className="the-button" inverted size='big'>Mulai Pesan</Button>
            </Link>
          </div>
        </div>
      </div >
    )
  } else {
    view = (
      <div className='landing'>
        <div className='blue-background'>
          <Header as='h1'>
            <div className='tagline'>
              <Typing speed={45}>
                <span>Pesan dan Jual Galon Lebih Mudah</span>
                <Typing.Backspace count={32} delay={2000} />
                <span>Beli Galon tanpa <u>Tunggu lama</u></span>
                <Typing.Backspace count={11} delay={2000} />
                <span><u>Capek Angkat Galon</u></span>
                <Typing.Backspace count={38} delay={4000} />
                <span>Jualan Galon dapat Customer <u>Lebih Banyak</u></span>
                <Typing.Backspace count={51} delay={2000} />
                <span>Ayo <u>Mulai Coba Galonku</u> Sekarang</span>
                <Typing.Reset count={3} delay={5000000} />
              </Typing>
            </div>
          </Header>

          <div className='button-landing'>
            <div className="button-divider">
              <Link to="/merchants/login" className="nav-link">
                <Button className='the-button' inverted size='big'>Mulai Jual</Button>
              </Link>
            </div>
          </div>

          <div className="button-divider">
            <Link to="/users/login" className="nav-link">
              <Button className="the-button" inverted size='big'>Mulai Pesan</Button>
            </Link>
          </div>
        </div>
      </div >
    )
  }
  return view
}

export default Landing
