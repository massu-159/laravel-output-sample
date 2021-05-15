<template>
  <div id="list">
    <p>節税の取組</p>
    <h5>個人（*個人事業主）</h5>
    <div class="form-check" v-for="(data, id) in scoreList" :key="id">
      <input
        class="form-check-input"
        type="checkbox"
        value="index"
        
        @click="clickScore"
      />
      <label class="form-check-label" for="flexCheckDefault">
        {{data.title}}
      </label>
    </div>


  </div>
</template>

<script>
export default {
  props: {
    initialIsScoredBy: {
      type: Boolean,
      default: false,
    },
    initialCountScores: {
      type: Number,
      default: 0,
    },
    authorized: {
      type: Boolean,
      default: false,
    },
    endpoint: {
      type: String,
    },
  },
  data(){
    return {
      scoreList: [
        {
          title: "基礎控除"
        },
        {
          title: "住宅ローン控除"
        },
        {
          title: "生命保険料控除"
        },
        {
          title: "介護保険料控除"
        },
        {
          title: "個人年金保険料控除"
        },
        {
          title: "地震保険料控除"
        },
        {
          title: "社会保険料控除"
        },
        {
          title: "医療費控除"
        },
        {
          title: "iDeCo（個人型確定拠出年金）"
        },
        {
          title: "ふるさと納税（寄附金控除）"
        },
        {
          title: "寡婦控除（寡夫控除）"
        },
        {
          title: "雑損控除"
        },
        {
          title: "災害免除法による税金の軽減・免除"
        },
        {
          title: "扶養控除"
        },
        {
          title: "配偶者控除"
        },
        {
          title: "配偶者特別控除"
        },
        {
          title: "NISA"
        },
        {
          title: "給与所得者の特定支出控除"
        },
        {
          title: "勤労学生控除"
        },
        {
          title: "セルフメディケーション税制"
        },
        {
          title: "上場株式等に係る譲渡損失の繰越控除"
        },
        {
          title: "*青色申告"
        },
        {
          title: "*専従者控除"
        },
        {
          title: "*小規模企業共済等掛金控除"
        },
        {
          title: "*減価償却の特例（少額減価償却）"
        },
        {
          title: "*短期前払費用の特例"
        },
        {
          title: "*経営セーフティ共済（中小企業倒産防止共済）"
        },
      ],
      isLikedBy: this.initialIsLikedBy,
      countScores: this.initialCountLikes,
      gotToScore: false,
    };
  },
  methods: {
    clickScore() {
        if (!this.authorized) {
          alert('記録機能はログイン中のみ使用できます')
          return
        }

        this.isScoredBy
          ? this.yet()
          : this.done()
      },
      async done() {
        const response = await axios.put(this.endpoint)

        this.isScoredBy = true
        this.countScores = response.data.countScores
        this.gotToScore = true
      },
      async yet() {
        const response = await axios.delete(this.endpoint)

        this.isScoredBy = false
        this.countScores = response.data.countScores
        this.gotToScore = false
      },
  }
}
</script>


<style lang="css"　scoped>
#list {
margin: 30px;
}
.form-check {
  font-size: 20px;
  margin: 10px;
}
input[type="checkbox"]{
  transform: scale(2);
}

</style>