import hbs from '@glimmer/inline-precompile';
import { setupRenderingTest } from '@glimmer/test-helpers';

const { module, test } = QUnit;

module('Component: Apollo15FlightPath', function(hooks) {
  setupRenderingTest(hooks);

  test('it renders', async function(assert) {
    await this.render(hbs`<Apollo15FlightPath />`);
    assert.equal(this.containerElement.textContent, 'Welcome to Glimmer!\n');
  });
});
