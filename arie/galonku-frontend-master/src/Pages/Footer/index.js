import React from 'react'
import { Grid, Header, Segment, Container } from 'semantic-ui-react'

const Footer = () => (
  <Segment inverted vertical style={{ padding: '5em  0em' }}>
    <Container>
      <Grid divided inverted stackable>
        <Grid.Row>
          <Grid.Column width={8} textAlign='left'>
            <Header as='h4' inverted>
              Hubungi Kami
            </Header>
            <p>
              Email: andromeda.org1@gmail.com
            </p>
          </Grid.Column>
          <Grid.Column width={6} textAlign='left'>
            Copyright AndromedaOrg @ 2018
          </Grid.Column>
        </Grid.Row>
      </Grid>
    </Container>
  </Segment>
)

export default Footer
